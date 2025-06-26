<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\LoginAttempt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentVerification;
use Illuminate\Support\Facades\Session;


class AccountLogin extends Controller
{
    public function user_login(Request $request)
	{	
		$user = User::where("email", $request->email)->whereRaw('`flags` & ? = ? ', [User::FLAG_EMAIL_VERIFIED, User::FLAG_EMAIL_VERIFIED])->first();

		if (!$user || !HASH::check($request->password, $user->password)) {
			
			$request->session()->put('request_error', 'Invalid Credentials!');
			return redirect()->route('SigninSignup');

		}else if(!$user->email_verified){

			return redirect()->route('Verification');

		}else if($user->terminate){

			$request->session()->put('request_error', 'You are terminate Contact administrators!');
			return redirect()->route('SigninSignup');
		}
		
		request()->user = $user;
		$login_attempt = new LoginAttempt();
		$login_attempt->user_id = $user->user_id;
		$login_attempt->access_token = generate_token($user);
		$login_attempt->access_expiry = date("Y-m-d H:i:s", strtotime("1 year"));

		if (!$login_attempt->save()) return api_error();

		session(['usertoken'=> $login_attempt->access_token]);
		return redirect()->route('Profile');
	}

    public function register(Request $request){

		$verification_token = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 6);
		$uniquecode = md5(uniqid(rand(), true));

        $newregister = new User();
        $newregister->first_name 	= $request->first_name;
        $newregister->last_name 	= $request->last_name;
        $newregister->email 	    = $request->email;
		$newregister->country_id 	= $request->country;
		$newregister->user_id  	    = $uniquecode;
		$newregister->email_verification_token = $verification_token;
		$newregister->signup_type 	= 'email';
		$newregister->roll_type 	= '3';
		$newregister->password 		= Hash::make($request->password);

        if ($newregister->save()){

			Mail::to($request->email)->send(new StudentVerification($verification_token));
			$request->session()->put('email', $request->email);
            return redirect()->route('Verification');
        }
    }

	public function verify_student(Request $request){

		$A = $request->a;
		$B = $request->b;
		$C = $request->c;
		$D = $request->d;
		$E = $request->e;
		$F = $request->f;

		$pin = $A.$B.$C.$D.$E.$F;

		$user = User::where('email', $request->email)->first();

		if( $user->email_verification_token == $pin ){

            $flagged = User::FLAG_EMAIL_VERIFIED;
			$user_verify = User::where('email', $request->email)->update([
				'flags' => $flagged
			]);

			if($user_verify){
				$request->session()->put('request_success', 'Verified succssfully!');
				return redirect()->route('SigninSignup');
			}
		}
	} 
	
	public function update_details(Request $request){

		
		$user = User::where('email', $request->email)->update([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
 			'address' => $request->addess,
			'country_id' => $request->country
		]);
		// dd($request->first_name);
		if($user){
			$request->session()->put('request_success', 'Profile updated succssfully!');
			return redirect()->route('Profile');
		}else{
			$request->session()->put('request_error', 'Profile updated succssfully!');
			return redirect()->route('Profile');
		}
	}

	public function logout(Request $request) {
        
        if ($request->login_attempt) {
			$request->login_attempt->access_expiry = date("Y-m-d H:i:s");
			$request->session()->put('email', $request->email);
			$request->login_attempt->save();
		}
        return redirect('/');
    }
}
