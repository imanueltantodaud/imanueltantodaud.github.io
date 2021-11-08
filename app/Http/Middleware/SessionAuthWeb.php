<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\LoginAttempt;
use Illuminate\Http\Request;
use App\Models\User;

class SessionAuthWeb
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $sessionNotRequired = [
            'home',
            'About',
            'Faqs',
            'Contact',
            'HelpCenter',
            'PrivacyPolicy',
            'TeachInInact',
            'TeachInactForm',
            'StoreCourse',
            'SigninSignup',
            'UserLogin',
            'AdminLogin',
            'AdminSignIn',
            'Register',
            'Verification',
            'Blog',
            'BlogSingle',
            'VerifyStudent',
            'CoursesForIndividuals',
            'CoursesForEnterprise',
            'TeachInactForm',
            'CourseBreifNew',
            'SignIn',
            'InstructorLogin'
        ];
        //var_dump($request);
        //var_dump($request->route()->getName());
        if ($this->is_valid_token($request)) {
            // var_dump($request->user);
            $request->user = User::where('user_id', $request->login_attempt->user_id)->first();
            // $request->cashier = Cashier::where('cashier_id', $request->login_attempt->cashier_id)->first();
            // $request->super_admin = SuperAdmin::where('super_admin_id', $request->login_attempt->admin_id)->first();

            if ($request->user) {
                return $next($request);

            } 
            
            // else if ($request->cashier) {
            //     return $next($request);

            // }else if ($request->super_admin) {
            //     return $next($request);
            // }

        } else if (in_array($request->route()->getName(), $sessionNotRequired)) {
            return $next($request);

        }
        return redirect(route('SigninSignup'))->with(['validation_error' => 'You are unauthorized!']);
    }

    public function is_valid_token(&$request) {
        //var_dump($request);
        $token = getTokenWeb();
        if (!$token) {
            return false;
        }

        $request->login_attempt = LoginAttempt::where("access_token", $token)->get()->first();
        $is_expired = "is_access_expired";

        return $request->login_attempt && !($request->login_attempt->toArray())[$is_expired];
    }
}
