<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\LoginAttempt;
use App\Models\QuizQuestion;
use App\Models\Course;
use App\Models\InstructorCourseRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InstructorController extends Controller
{
    public function signin(){
        
        return view('instructor-dashboard.login');
    }

    public function instructor_login(Request $request)
	{
		$user = User::where("email", $request->email)->first();

        if (!$user || !HASH::check($request->password, $user->password)) {
			
			$request->session()->put('request_error', 'Invalid Credentials I!');
			return redirect()->route('SignIn');

		}else if($user->roll_type != '2'){

            $request->session()->put('request_error', 'You are not Instructor!');
			return redirect()->route('SignIn');
        }

        request()->user = $user;
        $login_attempt = new LoginAttempt();
        $login_attempt->user_id = $user->user_id;
        $login_attempt->access_token = generate_token($user);
        $login_attempt->access_expiry = date("Y-m-d H:i:s", strtotime("1 year"));

        if (!$login_attempt->save()) return api_error();

        session(['usertoken'=> $login_attempt->access_token]);
        return redirect()->route('EnrolledStudent');
	}

    public function instructor_request_course(Request $request){

		// $data['courseists'] = Course::where('course_user_id', $request->user->user_id)->get();

        $data['courseists'] = DB::table('courses')
        ->where('courses.course_user_id', $request->user->user_id)
        ->join('users','courses.course_user_id','=','users.user_id')
        ->select('courses.*','users.*')
        ->orderBy('courses.id', 'DESC')->paginate(10);

        return view('instructor-dashboard.request-course', $data);
    }

    public function enrolled_student(Request $request){

        $data['users'] = DB::table('courses')
        ->where('courses.course_user_id', $request->user->user_id)
        ->join('enrolled_courses','courses.id','=','enrolled_courses.course_id')
        ->join('users','enrolled_courses.user_id','=','users.user_id')
        ->select('enrolled_courses.*','courses.*','users.*')
        ->orderBy('enrolled_courses.id', 'DESC')->paginate(10);

        return view('instructor-dashboard.enrolled-student', $data);
    }

    public function instructor_add_quiz_question(){

        $data['courses'] = Course::get();
        return view('instructor-dashboard.add-quiz-question', $data);   
    }

    public function instructor_add_quiz_question_store(Request $request){
        
        $quiz_question = new QuizQuestion();
        $quiz_question->question = $request->question;
        $quiz_question->course_id = $request->course;
        if($quiz_question->save()){
            $request->session()->put('request_success', 'Quiz question added succssfully!');
            return redirect()->route('InstructorAddQuizQuestion');
        }
    }

    public function instructor_add_quiz_option(){

        $data['quizes'] = QuizQuestion::get();
        return view('instructor-dashboard.add-quiz-option', $data);
    }

    public function instructor_add_quiz_option_store(Request $request){

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
            return redirect()->route('InstructorAddQuizOption');
        }
    }

    public function instructor_quiz_list(){

        $data['quiz_ists'] = DB::table('quiz_questions')
            ->join('quiz_options','quiz_questions.id','=','quiz_options.question_id')
            ->join('courses','quiz_questions.course_id','=','courses.id')
            ->select('quiz_questions.*','quiz_options.*','courses.course_title')
            ->orderBy('quiz_questions.id', 'DESC')->paginate(10);
        
        return view('instructor-dashboard.quiz-list', $data);
    }

    public function instructor_update_quiz($id){

        $data['quizes'] = DB::table('quiz_questions')
        ->where('quiz_questions.id',$id)
        ->join('quiz_options','quiz_questions.id','=','quiz_options.question_id')
        ->join('courses','quiz_questions.course_id','=','courses.id')
        ->select('quiz_questions.*','quiz_options.*','courses.course_title')->first();
        return view('instructor-dashboard.update-quiz', $data);
    }

    public function instructor_update_quiz_option(Request $request){

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
            return redirect()->route('InstructorQuizList');
        }else{
            $request->session()->put('request_error', 'Quiz not updated succssfully!');
            return redirect()->route('InstructorQuizList');
        }
    }

    public function instructor_delete_quiz(Request $request, $id){

        $delete = QuizQuestion::where('id', $id)->delete();
        if($delete){
            $request->session()->put('request_success', 'Quiz deleted succssfully!');
            return redirect()->route('InstructorQuizList');
        }
    }
}
