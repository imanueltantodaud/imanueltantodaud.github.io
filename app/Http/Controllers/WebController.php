<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\EnrolledCourse;
use App\Models\Country;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\QuizResult;
use App\Models\CourseSetup;
use App\Models\VideoCourse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ChatBot;

//use GuzzleHttp\Client;
//use GuzzleHttp\Exception\RequestException;
//use Guzzle\Http\Exception\ClientErrorResponseException;
//use GuzzleHttp\Exception\ServerException;
//use GuzzleHttp\Exception\BadResponseException;

class WebController extends Controller
{
    public function index(){

        /*$data['popular_courses'] = Course
            ::join('course_categories', 'courses.course_category_id', 'course_categories.id')
            ->where('course_categories.name', 'Most Popular Courses')->get();*/
        $data['popular_courses'] = Course::where('course_category_id', 1)->get();
        $data['trending_courses'] = Course::where('course_category_id', 2)->get();
        $data['top_rated_courses'] = Course::where('course_category_id', 3)->get();
        
        return view('home', $data);
    }

    public function blog(){

        $data['blogcategories'] = BlogCategory::get();
        
        $data['blogs'] = DB::table('blogs')
            ->orderBy('id', 'DESC')->get();

        return view('blog',$data);
    }

    public function blog_single($id){

        $data['courses'] = Course::get();
        $data['blogs_sinles'] = Blog::where('id', $id)->first();
        return view('blog-single', $data);
    }

    public function courses_for_individuals(){
        $data['courses'] = Course::get();
        return view('courses-for-individuals',$data);
    }

    public function courses_for_enterprise(){
        return view('courses-for-enterprise');
    }

    public function teach_in_inact(){
        return view('teach-in-inact');
    }

    public function signin_signup(){

        $data['countries'] = Country::get();
        return view('signin-signup', $data);
    }

    public function about(){
        return view('about');
    }

    public function faqs(){
        return view('faqs');
    }

    public function contact(){
        return view('contact');
    }

    public function help_center(){
        return view('help-center');
    }

    public function privacy_policy(){
        return view('privacy-policy');
    }

    public function verification(){
        return view('verification');
    }

    public function teach_inact_form(){
        return view('teach-inact-form');
    }

    public function quiz($id){
        
        $data['enrolled_curse'] = Course::where('id', $id)->first();
        $data['quizes'] = DB::table('quiz_questions')
            ->where('quiz_questions.course_id', $id)
            ->join('courses','quiz_questions.course_id','=','courses.id')
            ->join('quiz_options','quiz_questions.id','=','quiz_options.question_id')
            ->select('quiz_options.*','quiz_questions.*',)->inRandomOrder()->limit(30)->get();
        return view('quiz', $data);
    }

    public function quiz_store(Request $request){

        $quiz_result = new QuizResult();
        $quiz_result->course_id = $request->user_id;
        $quiz_result->user_id = $request->course_id;
        $quiz_result->question = json_encode($request->question);
        $quiz_result->answers = json_encode($request->quiz_answer);
        if($quiz_result->save()){
            
            $request->session()->put('request_success', 'Quiz submitted succssfully!');
            return redirect()->route('Profile');

        }else{
            $request->session()->put('request_error', 'Quiz submitted error!');
            return redirect()->route('Profile');
        }
    }

    public function profile(Request $request){
        
        $data['enrolled_courses'] = DB::table('enrolled_courses')
            ->join('courses','enrolled_courses.course_id','=','courses.id')
            ->select('enrolled_courses.course_id','enrolled_courses.payment_method','courses.*')
            ->orderBy('enrolled_courses.id', 'DESC')->get();
        $data['countries'] = Country::get();
        // $data['enrolled_courses'] = EnrolledCourse::where('user_id', $request->user->user_id)
        // ->get();
        return view('profile', $data);
    }

    public function main_course_new($id){

        $data['courses'] = Course::where('id', $id)->first();
        $data['enrolled_curse'] = EnrolledCourse::where('id', $id)->first();
        $data['course_setup'] = CourseSetup::where('enrolled_course_id', $id)->get();
        
        foreach($data['course_setup']  as $videos){

            $someArray[] = json_decode($videos['weekly_video_content'], true);
        }
        
        $data['video_courses'] = VideoCourse::whereIn('course_id', $someArray[0])->get();
        
        return view('main-course-new', $data);
    }

    public function main_course(){
        return view('main-course');
    }

    public function forgot_password(){
        return view('forgot-password');
    }

    public function course_breif(){
        return view('course-breif');
    }

    public function course_breif_new($id){
        $data['courses'] = Course
            ::where('courses.id', $id)
            ->join('users','courses.course_user_id','=','users.user_id')
            ->join('video_courses','courses.id','=','video_courses.course_id')
            ->select('users.first_name','users.last_name','users.image','courses.*','video_courses.*')->first();

        $data['courses_videos'] = VideoCourse
            ::join('courses','video_courses.course_id','=','courses.id')
            ->where('courses.id', $id)
            ->select('video_courses.*')->get();
        
        foreach($data['courses_videos'] as $dt) {
            $min = min(
                (strpos($dt->video, '1'))? strpos($dt->video, '1') : 99999,
                (strpos($dt->video, '2'))? strpos($dt->video, '2') : 99999,
                (strpos($dt->video, '3'))? strpos($dt->video, '3') : 99999,
                (strpos($dt->video, '4'))? strpos($dt->video, '4') : 99999,
                (strpos($dt->video, '5'))? strpos($dt->video, '5') : 99999,
                (strpos($dt->video, '6'))? strpos($dt->video, '6') : 99999,
                (strpos($dt->video, '7'))? strpos($dt->video, '7') : 99999,
                (strpos($dt->video, '8'))? strpos($dt->video, '8') : 99999,
                (strpos($dt->video, '9'))? strpos($dt->video, '9') : 99999,
                (strpos($dt->video, '0'))? strpos($dt->video, '0') : 99999,
            );
            //$str = 'https://api.vimeo.com/videos/' . substr($dt->video, $min);
            //$token = base64_decode('0abf7e875783dda8f9dd1232994671a463decf39:G+8YQM8635frUJIXzXo28uMCC+g1+tiRVJvS0CSsFfebDctiTHK3gg3YXAUeQk4DEs68A/wCpep5nab8Sj+JBfIr+DQdId1o7avt4SfAW8SRz26eE6H0Klu3e2yAkzmv');
            //$client = new GuzzleHttp\Client();
            //$response = $client->request('GET', 'https://api.vimeo.com/videos/' . substr($dt->video, $min) . '?api_token=' . $token);
        }
        
        return view('course-breif-new', $data);
    }

    public function checkout($id){

        $data['courses'] = Course::where('id', $id)->first();
        return view('checkout', $data);
    }

    public function checkout_store(Request $request){

        $enrolledcourse = new EnrolledCourse();
        $enrolledcourse->user_id  = $request->user_id;
        // $enrolledcourse->payment_method  = $request->customRadio;
        $enrolledcourse->payment_method  = 'Visa';
        $enrolledcourse->course_id  = $request->course_id;
        $enrolledcourse->course_fee  = $request->fees;
        $enrolledcourse->name  = $request->fullName;
        $enrolledcourse->email  = $request->email;
        $enrolledcourse->address  = $request->address;
        $enrolledcourse->country_id  = $request->country;
        $enrolledcourse->state  = $request->state;
        $enrolledcourse->zip_code  = $request->zip_code;
        $enrolledcourse->payment_status  = 'approved';

        if($enrolledcourse->save()){
            $request->session()->put('request_success', 'Course enrolled succssfully!');
            return redirect()->route('Profile');
        }
    }

    public function chat_box(Request $request){

        Mail::to($request->email)->send(new ChatBot($request->message));

    }
}
