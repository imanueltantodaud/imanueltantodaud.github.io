<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstructorCourseRequest;
use App\Models\User;
use App\Models\Course;
use App\Models\LoginAttempt;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\QuizQuestion;
use App\Models\QuizOption;
use App\Models\CourseCategory;
use App\Models\VideoCourse;
use App\Models\CourseSetup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Vimeo\Laravel\VimeoManager;
use App\Exports\VideoExport;
use Maatwebsite\Excel\Facades\Excel;
use File;

class AdminController extends Controller
{
    public function login(){
        return view('admin-dashboard.login');
    }

    public function request_course(){

		$data['courseists'] = InstructorCourseRequest::get();
        return view('admin-dashboard.request-course', $data);
    }

    public function view_requested_course(Request $request, $id){

        $data['request_course'] = InstructorCourseRequest::where('id', $id)->first();
        return view('admin-dashboard.view-requested-course', $data);
    }

    public function delete_request_course(Request $request, $id){

        $delete = InstructorCourseRequest::where('id', $id)->delete();
        if($delete){
            $request->session()->put('request_success', 'Requested Course deleted succssfully!');
            return redirect()->route('RequestCourseList');
        }
    }

    public function admin_login(Request $request)
	{
		$user = User::where("email", $request->email)->first();
        
        if (!$user || !HASH::check($request->password, $user->password)) {
			
			$request->session()->put('request_error', 'Invalid Credentials!');
			return redirect()->route('AdminLogin');

		}else if($user->roll_type != '1'){

            $request->session()->put('request_error', 'You are not Admin!');
			return redirect()->route('AdminLogin');
        }

		request()->user = $user;
		$login_attempt = new LoginAttempt();
		$login_attempt->user_id = $user->user_id;
		$login_attempt->access_token = generate_token($user);
		$login_attempt->access_expiry = date("Y-m-d H:i:s", strtotime("1 year"));

		if (!$login_attempt->save()) return api_error();

		session(['usertoken'=> $login_attempt->access_token]);
		return redirect()->route('RequestCourseList');
	}

    public function add_course_category(){
        return view('admin-dashboard.add-course-category');
    }

    public function add_course_category_store(Request $request){
        
        $category = new CourseCategory();
        $category->name = $request->course_category;
        if($category->save()){
            $request->session()->put('request_success', 'Category added succssfully!');
            return redirect()->route('AddCourseCategory');
        }
    }

	public function admin_add_course(){

        $data['users'] = User::where('roll_type', '!=', '3')->get();
        $data['course_categories'] = CourseCategory::get();
		return view('admin-dashboard.add-course', $data);
	}

    // Video functions starts

	public function admin_add_video(){

        $data['Courses'] = Course::get();
		return view('admin-dashboard.add-video', $data);
	}

	public function admin_add_video_store(Request $request){

        $video_course = new VideoCourse();
        $video_course->course_id  = $request->course_id;
        $video_course->number_views  = "3";
        $video_course->name  = $request->video_name;
        $video_course->total_time  = $request->video_duration;
        $video_course->description  = $request->video_description;
        $video_course->video  = $request->video;
        $video_course->video_attachments  = $request->video_attachment;
        if($video_course->save()){
            $request->session()->put('request_success', 'Video added succssfully!');
            return redirect()->route('AdminAddVideo');
        }else{
            $request->session()->put('request_error', 'Course added error!');
            return redirect()->route('AdminAddVideo');
        }
	}

    public function admin_video_list(){

        $data['video_Courses'] = VideoCourse::get();

        $data['video_Courses'] = DB::table('video_courses')
            ->join('courses','video_courses.course_id','=','courses.id')
            ->select('courses.course_title','video_courses.*')
            ->orderBy('video_courses.id', 'DESC')
            ->paginate(10);
		return view('admin-dashboard.video-list', $data);
	}

    public function delete_video(Request $request, $id){

		$delete = VideoCourse::where('id', $id)->delete();
        if($delete){
            $request->session()->put('request_success', 'Video deleted succssfully!');
            return redirect()->route('AdminVideoList');
        }
	}

    public function  export_videos(){

        return Excel::download(new VideoExport, 'Users.xlsx');
    }

    // Video functions ends

	public function admin_add_course_store(Request $request, VimeoManager $vimeo){
		
		//dd($request->all());
        $add_course = new Course();
	
        foreach($request->outer_group as $data){
            //print_r($data['user_id']);die;
            //dd($data['course_title']);
            $add_course->course_user_id  = $data['user_id'];
            $add_course->course_title  = $data['course_title'];
            $add_course->course_description  = $data['course_description'];
            $add_course->course_price  = $data['course_fee'];
            $add_course->course_duration  = $data['course_duration'];
            $add_course->weekly_study  = $data['weekly_study'];
            $add_course->course_category_id  = $data['course_category'];
            $add_course->course_tags  = $data['course_tags'];
            
            // $data_video = $add_course->course_content  = json_encode($data['inner_group']);
            $add_course->course_content  = "None";
            
            $add_course->number_students  = '0';
            $add_course->projects  = $data['projects'];
            $add_course->about_course  = $data['about_course'];
            $add_course->about_brief  = $data['about_brief'];
            $add_course->author_description  = $data['author_description'];
            $add_course->related_courses  = json_encode($data['inner_groupB']);
            
            //dd(json_encode($data['inner_group']));
            //dd(json_encode($data['inner_groupB']));
        }
		

        if($add_course->save()){
            $request->session()->put('request_success', 'Course added succssfully!');
            return redirect()->route('AdminAddCourse');
        }
	}

    public function add_blog_category(){
        return view('admin-dashboard.add-blog-category');
    }

    public function add_blog_category_store(Request $request){
        
        $category = new BlogCategory();
        $category->category_title = $request->category_title;
        if($category->save()){
            $request->session()->put('request_success', 'Category added succssfully!');
            return redirect()->route('AddBlogCategory');
        }
    }

    public function add_blogs(){
        $data['categories'] = BlogCategory::get();
        return view('admin-dashboard.add-blogs', $data);
    }
    
    public function add_blogs_store(Request $request){
        
        $blog = new Blog();
        $blog->blog_title     = $request->blog_title;

        // if ($request->has('blog_thumbnail')) {
		// 	$img_name = rand(9999, 99999);
		// 	if (!file_exists(storage_path("app/public/admins/" . $request->blog_title))) {
		// 		mkdir(storage_path("app/public/admins/" . $request->blog_title), 0777, true);
		// 	}

        //     $allowed_file_types = [
        //         "gif",
        //         "png",
        //         "jpg",
        //         "jpeg",
        //         "GIF",
        //         "PNG",
        //         "JPG",
        //         "JPEG",
        //     ];

        //     if (!in_array($request->file('blog_thumbnail')->extension(), $allowed_file_types)) {
        //         $all_types = implode(",", $allowed_file_types);
        //         return api_error("The Image must be a file of type: " . $all_types . "!");

        //     } else {
        //         $logo = addFile($request->file('blog_thumbnail'), storage_path("app/public/admins/" . $request->blog_title), 500, 500, false);
        //         //$user_document->selfie = $logo;
        //         dd($logo);
        //         // $update_user_profile = SuperAdmin::where('super_admin_id', $request->blog_title)->update([
        //         //     'image' => $logo]);
        //     }
        // }

        $blog->blog_thumbnail = $request->blog_thumbnail;
        $blog->blog_content   = $request->blog_content;
        $blog->blog_category  = $request->blog_category;
        if($request->allow_comment == 'on'){
            $blog->blog_comment = 1;
        }else{
            $blog->blog_comment = 0;
        }
        if($blog->save()){
            $request->session()->put('request_success', 'Blog added succssfully!');
            return redirect()->route('AddBlogs');
        }
    }

    public function all_blog_list(){

        // $data['blogs'] = Blog::get();
        $data['blogs'] = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category','=','blog_categories.id')
            ->select('blog_categories.category_title','blogs.*')
            ->orderBy('blogs.id', 'DESC')->paginate(10);
        return view('admin-dashboard.blog-list', $data);
    }

    public function update_blog($id){
        
        $data['categories'] = BlogCategory::get();
        $data['update_blogs'] = Blog::where('id', $id)->first();
        return view('admin-dashboard.update-blog',$data);
    }
    
    public function update_blog_store(Request $request){

        if($request->blog_comment == 'on'){

            $update_blog = Blog::where('id', $request->blog_id)->update([
                'blog_title' => $request->blog_title,
                'blog_thumbnail' => $request->blog_thumbnail,
                'blog_content' => $request->blog_content,
                'blog_category' => $request->blog_category,
                'blog_comment' => '1'
            ]); 

        }else{
            
            $update_blog = Blog::where('id', $request->blog_id)->update([
                'blog_title' => $request->blog_title,
                'blog_thumbnail' => $request->blog_thumbnail,
                'blog_content' => $request->blog_content,
                'blog_category' => $request->blog_category,
                'blog_comment' => '0'
            ]); 
        }
        
        if($update_blog){

            $request->session()->put('request_success', 'Blog updated succssfully!');
            return redirect()->route('BlogList');

        }else{

            $request->session()->put('request_error', 'Blog updated Error!');
            return redirect()->route('BlogList');
        }
    }

    public function course_list(){
        
        $data['courses'] = Course
            ::join('users','courses.course_user_id','=','users.user_id')
            ->select('users.first_name','users.last_name','courses.*')
            ->orderBy('courses.id', 'DESC')->paginate(10);

        return view('admin-dashboard.course-list', $data);
    }

    public function setup_course_outline($id){
        
        $data['courses'] = Course::where('id', $id)->first();
        $data['course_setup'] = CourseSetup::where('enrolled_course_id', $id)->get();
        $data['courses_videos'] = DB::table('video_courses')
            ->where('courses.id', $id)
            ->join('courses','video_courses.course_id','=','courses.id')
            ->select('video_courses.*')->get();
        // dd($data);
        return view('admin-dashboard.setup-course-outline', $data);
    }

    public function update_course_view($id){

        $data['users'] = User::where('roll_type', 2)->get();
        $data['course_categories'] = CourseCategory::get();
        $data['users_course'] = Course
            ::where('courses.id', $id)
            ->join('users','courses.course_user_id','=','users.user_id')
            ->select('users.*','courses.*')->first();
        
        return view('admin-dashboard.update-course', $data);
    }

    public function update_courses(Request $request){
        
        // dd($request->all());
        $add_course = Course::where('id', $request->outer_group[0]['course_id'])->update([
            'course_user_id'  => $request->outer_group[0]['user_id'],
            'course_title'  => $request->outer_group[0]['course_title'],
            'course_description'  => $request->outer_group[0]['course_description'],
            'course_price'  => $request->outer_group[0]['course_fee'],
            'course_duration'  => $request->outer_group[0]['course_duration'],
            'weekly_study'  => $request->outer_group[0]['weekly_study'],
            'course_content'  => "None",
            'number_students'  => '0',
            'projects'  => $request->outer_group[0]['projects'],
            'about_course'  => $request->outer_group[0]['about_course'],
            'about_brief'  => $request->outer_group[0]['about_brief'],
            'author_description'  => $request->outer_group[0]['author_description'],
            'related_courses'  => json_encode($request->outer_group[0]['inner_groupB']),
            'course_category_id'  => $request->outer_group[0]['course_category'],
            'course_tags'  => $request->outer_group[0]['course_tags'],
        ]);

        if($add_course){
            $request->session()->put('request_success', 'Course updated succssfully!');
            return redirect()->back();

        }else{

            $request->session()->put('request_error', 'Course updated error!');
            return redirect()->back();
        }
    }
    
    public function setup_course_outline_store(Request $request){

        $course_setup = new CourseSetup();
        
        foreach($request->outer_group as $data){

            // print_r($data);die;
            
            $course_setup->enrolled_course_id = $data['course_id']; 
            // $course_setup->video_banner = $data['video_banner']; 
            $course_setup->video_banner = $data['course_id']; 
            $course_setup->weekly_title = $data['week_title']; 
            $course_setup->weekly_video_content = json_encode($data['inner_group']); 
        }

        // dd($course_setup);

        if($course_setup->save()){

            $request->session()->put('request_success', 'Course Outline setup succssfully!');
            return redirect()->route('CourseList');

        }else{

            $request->session()->put('request_error', 'Course Outline setup Error!');
            return redirect()->route('CourseList');
        }
    }

    public function instructor_list(){
        $data['instructors'] = User::where('roll_type', '2')->orderBy('id', 'DESC')->paginate(10);
        return view('admin-dashboard.instructor-list', $data);
    }
    
    public function user_list(){
        $data['users'] = User::where('roll_type', '3')->orderBy('id', 'DESC')->paginate(10);
        return view('admin-dashboard.user-list', $data);
    }

    public function delete_student(Request $request, $id){

		$delete = User::where('id', $id)->delete();
        if($delete){
            $request->session()->put('request_success', 'Student deleted succssfully!');
            return redirect()->route('UserList');
        }
	}

    public function terminate_student(Request $request, $id){

        $user = User::where('id', $id)->first();
        
        $flagged = User::FLAG_TERMINATE;
        $add_flags = $user->flags + $flagged;
        
        $user_terminate = User::where('id', $id)->update([
            'flags' => $add_flags
        ]);

        if($user_terminate){

            $request->session()->put('request_success', 'Student Resumed succssfully!');
            return redirect()->route('UserList');

        }else{

            $request->session()->put('request_error', 'Student Resumed Error!');
            return redirect()->route('UserList');
        }
	}

    public function un_terminate_student(Request $request, $id){

        $user = User::where('id', $id)->first();
        
        $flagged = User::FLAG_TERMINATE;
        $add_flags = $user->flags - $flagged;

        $user_terminate = User::where('id', $id)->update([
            'flags' => $add_flags
        ]);

        if($user_terminate){

            $request->session()->put('request_success', 'Student Terminated succssfully!');
            return redirect()->route('UserList');

        }else{

            $request->session()->put('request_error', 'Student Terminated Error!');
            return redirect()->route('UserList');
        }
	}

    public function student_profile(Request $request, $id){

        $data['user'] = DB::table('users')->where('users.id', $id)
        ->join('countries','users.country_id','=','countries.id')
        ->first();

        return view('admin-dashboard.student-profile', $data);
	}


    public function add_quiz_question(){

        $data['courses'] = Course::get();
        return view('admin-dashboard.add-quiz-question', $data);   
    }

    public function add_quiz_question_store(Request $request){
        
        $quiz_question = new QuizQuestion();
        $quiz_question->question = $request->question;
        $quiz_question->course_id = $request->course;
        if($quiz_question->save()){
            $request->session()->put('request_success', 'Quiz question added succssfully!');
            return redirect()->route('AddQuizQuestion');
        }
    }

    public function add_quiz_option(){

        $data['quizes'] = QuizQuestion::get();
        return view('admin-dashboard.add-quiz-option', $data);
    }

    public function add_quiz_option_store(Request $request){

        $quizoption = new QuizOption();
        $quizoption->question_id = $request->quiz;
        $quizoption->option_a = $request->option_a;
        $quizoption->option_answer_a = $request->answer_a;
        $quizoption->option_b = $request->option_b;
        $quizoption->option_answer_b = $request->answer_b;
        $quizoption->option_c = $request->option_c;
        $quizoption-> option_answer_c = $request->answer_C;
        $quizoption->option_d = $request->option_d;
        $quizoption->option_answer_d = $request->answer_d;

        if($quizoption->save()){
            $request->session()->put('request_success', 'Quiz Options added succssfully!');
            return redirect()->route('AddQuizOption');
        }
    }

    public function quiz_list(){

        $data['quiz_ists'] = DB::table('quiz_questions')
            ->join('quiz_options','quiz_questions.id','=','quiz_options.question_id')
            ->join('courses','quiz_questions.course_id','=','courses.id')
            ->select('quiz_questions.*','quiz_options.*','courses.course_title')
            ->orderBy('quiz_questions.id', 'DESC')->paginate(10);
        
        return view('admin-dashboard.quiz-list', $data);
    }

    public function update_quiz($id){

        $data['quizes'] = DB::table('quiz_questions')
        ->where('quiz_questions.id',$id)
        ->join('quiz_options','quiz_questions.id','=','quiz_options.question_id')
        ->join('courses','quiz_questions.course_id','=','courses.id')
        ->select('quiz_questions.*','quiz_options.*','courses.course_title')->first();
        return view('admin-dashboard.update-quiz', $data);
    }

    public function update_quiz_option(Request $request){

        $quiz = QuizQuestion::where('id', $request->question_id)->update([
            'question' => $request->question,
        ]);
        
        $quiz_option = QuizOption::where('question_id', $request->question_id)->update([
            'question_id' => $request->question_id,
            'option_a' => $request->option_a,
            'option_answer_a' => $request->answer_a,
            'option_b' => $request->option_b,
            'option_answer_b' => $request->answer_b,
            'option_c' => $request->option_c,
            'option_answer_c' => $request->answer_C,
            'option_d' => $request->option_d,
            'option_answer_d' => $request->answer_d,
        ]);

        if($quiz && $quiz_option){
            $request->session()->put('request_success', 'Quiz updated succssfully!');
            return redirect()->route('QuizList');
        }else{
            $request->session()->put('request_error', 'Quiz not updated succssfully!');
            return redirect()->route('QuizList');
        }
    }

    public function delete_quiz(Request $request, $id){

        $delete = QuizQuestion::where('id', $id)->delete();
        if($delete){
            $request->session()->put('request_success', 'Quiz deleted succssfully!');
            return redirect()->route('QuizList');
        }
    }
}
