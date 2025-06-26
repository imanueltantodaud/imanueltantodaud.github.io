<?php

use Twilio\Rest\Client;
use Illuminate\Support\Facades\Session;

if (!function_exists('getToken')) {
	function getToken($request) {
		if (preg_match('/Bearer\s(\S+)/', $request->header('Authorization'), $matches)) {
			return $matches[1];
		}
		return false;
	}
}

if (!function_exists('getTokenWeb')) {
    function getTokenWeb() {
        $token  = Session::get('usertoken');
        if($token){
            return $token;
        }
        return false;
    }
}

if (!function_exists('generate_token')) {
	function generate_token($user) {
		$token_params = [
			time(),
			$user->email,
			"access_token",
		];
		return base64_encode(md5(\implode("_", $token_params)));
	}
}

if (!function_exists('api_validation_error')) {
	function api_validation_error($message, $data) {
		$data = array('status' => false, 'error' => array('message' => $message, 'detail' => $data));
		return response()->json($data, 422);
	}
}

if (!function_exists('api_success')) {
	function api_success($message, $data) {
		$data = array('status' => true, 'response' => array('message' => $message, 'detail' => $data));
		return response()->json($data, 200);
	}
}

if (!function_exists('api_success1')) {
	function api_success1($message) {
		$data = array('status' => true, 'response' => array('message' => $message));
		return response()->json($data, 200);
	}
}

if (!function_exists('api_error')) {
	function api_error($message = 'There is some error', $error_code = 500) {
		$data = array('status' => false, 'error' => array('message' => $message));
		return response()->json($data, $error_code);
	}
}

if (!function_exists('generateRandomString')) {
	function generateRandomString($length = 20) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}

if (!function_exists('addFile')) {
	function addFile($file, $path, $width = '1200', $height = '1200', $resize = true) {

		$destinationPath = $path;

		$name = rand(9999, 99999) . '.' . $file->extension();
		$background = \Image::canvas($width, $height);

		if ($resize) {

			$img = \Image::make($file)->resize($width, $height, function ($c) {
				$c->aspectRatio();
				$c->upsize();

			});
		} else {
			$img = \Image::make($file)->fit($width, $height);
		}

		// $img = \Image::make($file)->fit($width, $height);
		$background->insert($img, 'center');
		$background->save($destinationPath . '/' . $name);

		$filePath = url('/') . '/' . $destinationPath . $name;
		return $name;
	}
}

if (!function_exists('get_place')) {
	function get_place($place_id) {
		$url = 'https://maps.googleapis.com/maps/api/place/details/json?place_id=' . $place_id . '&fields=geometry&key=AIzaSyA89-etKIfiHgLKrSEuwCBTGKimI6a-_aQ';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		$response = array();
		$response['http_code'] = $httpcode;
		$response['response'] = $result;
		return $response;
	}
}

if (!function_exists('send_message')) {
	function send_message($mobile_number, $message) {
		$accountSid = config('app.twilio')['TWILIO_ACCOUNT_SID'];
		$authToken = config('app.twilio')['TWILIO_AUTH_TOKEN'];
		$client = new Client($accountSid, $authToken);
		// dd($client);
		// Use the client to do fun stuff like send text messages!
		$client->messages->create(
			// the number you'd like to send the message to
			$mobile_number,
			array(
				// A Twilio phone number you purchased at twilio.com/console
				'from' => config('app.twilio')['TWILIO_PHONE'],
				// the body of the text message you'd like to send
				'body' => $message,
			)
		);
		return $client;

	}
}

if (!function_exists('api_get_radius')) {
	function api_get_radius() {
		\Artisan::call('config:cache');
		\Artisan::call('cache:clear');
		return config('app.default_radius');
	}
}

function notification_core ($data) {
	
	$SERVER_API_KEY = 'AAAAsXMbgV4:APA91bHdm-h5S7bfrnfhCYymnmjgKQ_FkQ31yo332AqRFfhmtNYMVQ2kGzusml7QJirpmVDZwBmjMS5UxnOMMTDS_ojWeDESmRsmX8gIaCfc_82bvQGPGcwaCnyOomIsoe6W4lScSE1_';

	$dataString = json_encode($data);

	$headers = [
		'Authorization: key=' . $SERVER_API_KEY,
		'Content-Type: application/json'
	];

	$ch = curl_init();
  
	curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
		   
	$response = curl_exec($ch);

	return response()->json(['response' => $response]);
}