<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstructorCourseRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class InstructorCourseRequestController extends Controller
{
    public function store_course(Request $request){
        
        $course_request = new InstructorCourseRequest();
        $course_request->email = $request->email;
        $course_request->name = $request->name;
        $course_request->country = $request->country;
        $course_request->resume = $request->resume_sample;
        $course_request->course_name = $request->course_name;
        $course_request->lecture_sample = $request->course_sample;
        $course_request->course_syllabus = $request->course_syllabus;
        if($request->cousrse_instructor){
            $course_request->course_instructor = 1;
        }
        if($request->cousrse_proposal == 'on'){
            $course_request->course_proposal = 1;
        }
        if($request->cousrse_support == 'on'){
            $course_request->course_support = 1;
        }

        $course_request->course_description = $request->cousrse_description;

        if($request->other){
            $course_request->course_duration = $request->other;
        }else{
            $course_request->course_duration = $request->others;
        }

        if($course_request->save()){
            $request->session()->put('request_success', 'Course added succssfully!');
            return redirect()->route('TeachInactForm');
        }
    }

    public function create_instructor_form(){

        return view('admin-dashboard.create-instructor-form');
    }

    public function admin_create_instructor(Request $request){

        $uniquecode = md5(uniqid(rand(), true));
        $new_instructor = new User();
        $new_instructor->user_id  = $uniquecode;
        $new_instructor->roll_type = '2';
        $new_instructor->country_id = $request->state;
        $new_instructor->city = $request->city;
        $new_instructor->postal_code = $request->postal_code;
        $new_instructor->first_name = $request->first_name;
        $new_instructor->last_name = $request->last_name;
        $new_instructor->email  = $request->email;
        $new_instructor->password = Hash::make($request->password);
        $new_instructor->signup_type  = 'email';
        if($new_instructor->save()){
            $request->session()->put('request_success', 'Instructor created succssfully!');
            return redirect()->route('CreateInstructorForm');
        }
    }
}
