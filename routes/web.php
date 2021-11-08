<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AccountLogin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorCourseRequestController;
use App\Http\Controllers\InstructorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware(['web',"sessionAuthWeb"])->group(function () {
    Route::get('/', [WebController::class, 'index'])->name('home');
    Route::get('blog', [WebController::class, 'blog'])->name('Blog');
    Route::get('blog-single/{id}', [WebController::class, 'blog_single'])->name('BlogSingle');
    Route::get('courses-for-individuals', [WebController::class, 'courses_for_individuals'])->name('CoursesForIndividuals');
    Route::get('courses-for-enterprise', [WebController::class, 'courses_for_enterprise'])->name('CoursesForEnterprise');
    Route::get('teach-in-inact', [WebController::class, 'teach_in_inact'])->name('TeachInInact');
    Route::get('teach-inact-form', [WebController::class, 'teach_inact_form'])->name('TeachInactForm');
    Route::get('signin-signup', [WebController::class, 'signin_signup'])->name('SigninSignup');
    Route::get('about', [WebController::class, 'about'])->name('About');
    Route::get('faqs', [WebController::class, 'faqs'])->name('Faqs');
    Route::get('contact', [WebController::class, 'contact'])->name('Contact');
    Route::get('help-center', [WebController::class, 'help_center'])->name('HelpCenter');
    Route::get('privacy-policy', [WebController::class, 'privacy_policy'])->name('PrivacyPolicy');
    Route::get('verification', [WebController::class, 'verification'])->name('Verification');
    Route::post('verify-student', [AccountLogin::class, 'verify_student'])->name('VerifyStudent');
    Route::get('quiz/{id}', [WebController::class, 'quiz'])->name('Quiz');
    Route::post('quiz-store', [WebController::class, 'quiz_store'])->name('QuizStore');
    Route::get('profile', [WebController::class, 'profile'])->name('Profile');
    Route::get('main-course-new/{id}', [WebController::class, 'main_course_new'])->name('MainCourseNew');
    Route::get('main-course', [WebController::class, 'main_course'])->name('MainCourse');
    Route::get('forgot-password', [WebController::class, 'forgot_password'])->name('ForgotPassword');
    Route::get('course-breif', [WebController::class, 'course_breif'])->name('CourseBreif');
    Route::get('course-breif-new/{id}', [WebController::class, 'course_breif_new'])->name('CourseBreifNew');
    Route::get('checkout/{id}', [WebController::class, 'checkout'])->name('Checkout');
    Route::post('checkout-store', [WebController::class, 'checkout_store'])->name('CheckoutStore');
    Route::post('chat-box', [WebController::class, 'chat_box'])->name('ChatBox');
    Route::get('logout', [AccountLogin::class, 'logout'])->name('DashboardLogout');

    Route::post('user-login', [AccountLogin::class, 'user_login'])->name('UserLogin');
    Route::post('register', [AccountLogin::class, 'register'])->name('Register');
    Route::post('update-details', [AccountLogin::class, 'update_details'])->name('UpdateDetails');
    Route::post('store_course', [InstructorCourseRequestController::class, 'store_course'])->name('StoreCourse');

    Route::prefix('/admin/')->group(function () {
        Route::get('login', [AdminController::class, 'login'])->name('AdminLogin');
        Route::post('admin-login', [AdminController::class, 'admin_login'])->name('AdminSignIn');
        Route::get('request-course', [AdminController::class, 'request_course'])->name('RequestCourseList');
        Route::get('view-requested-course/{id}', [AdminController::class, 'view_requested_course'])->name('ViewRequestedCourse');
        Route::post('delete-request-course/{id}', [AdminController::class, 'delete_request_course'])->name('DeleteRequestCourse');
        Route::get('requested-course-list', [AdminController::class, 'requested_course_list'])->name('RequestedCourseList');
        Route::get('create-instructor-form', [InstructorCourseRequestController::class, 'create_instructor_form'])->name('CreateInstructorForm');
        Route::post('admin-create-instructor', [InstructorCourseRequestController::class, 'admin_create_instructor'])->name('AdminCreateInstructor');
        Route::get('admin-add-course', [AdminController::class, 'admin_add_course'])->name('AdminAddCourse');
        Route::post('admin-add-course-store', [AdminController::class, 'admin_add_course_store'])->name('AdminAddCourseStore');
        Route::get('admin-add-video', [AdminController::class, 'admin_add_video'])->name('AdminAddVideo');
        Route::get('admin-video-list', [AdminController::class, 'admin_video_list'])->name('AdminVideoList');
        Route::post('delete-video/{id}', [AdminController::class, 'delete_video'])->name('DeleteVideo');
        Route::get('export-videos', [AdminController::class, 'export_videos'])->name('ExportVideos');
        Route::post('admin-add-video-store', [AdminController::class, 'admin_add_video_store'])->name('AdminAddVideoStore');
        /** Blog Route **/
        Route::get('add-blog-category', [AdminController::class, 'add_blog_category'])->name('AddBlogCategory');
        Route::post('add-blog-category-store', [AdminController::class, 'add_blog_category_store'])->name('AddBlogCategoryStore');
        Route::get('add-blogs', [AdminController::class, 'add_blogs'])->name('AddBlogs');
        Route::post('add-blogs-store', [AdminController::class, 'add_blogs_store'])->name('AddBlogStore');
        Route::get('update-blog/{id}', [AdminController::class, 'update_blog'])->name('UpdateBlog');
        Route::post('update-blog-store', [AdminController::class, 'update_blog_store'])->name('UpdateBlogStore');
        Route::get('blog-list', [AdminController::class, 'all_blog_list'])->name('BlogList');
        Route::get('user-list', [AdminController::class, 'user_list'])->name('UserList');
        Route::post('delete-student/{id}', [AdminController::class, 'delete_student'])->name('DeleteStudent');
        Route::post('terminate-student/{id}', [AdminController::class, 'terminate_student'])->name('TerminateStudent');
        Route::post('un-terminate-student/{id}', [AdminController::class, 'un_terminate_student'])->name('UnTerminateStudent');
        Route::get('student-profile/{id}', [AdminController::class, 'student_profile'])->name('StudentProfile');
        Route::get('instructor-list', [AdminController::class, 'instructor_list'])->name('InstructorList');
        Route::get('course-list', [AdminController::class, 'course_list'])->name('CourseList');
        Route::get('setup-course-outline/{id}', [AdminController::class, 'setup_course_outline'])->name('SetupCourseOutline');
        Route::get('update-course-view/{id}', [AdminController::class, 'update_course_view'])->name('UpdateCourseView');
        Route::post('update-courses', [AdminController::class, 'update_courses'])->name('UpdateCourses');
        Route::post('setup-course-outline-store', [AdminController::class, 'setup_course_outline_store'])->name('SetupCourseOutlineStore');
        /** Quiz Route **/
        Route::get('add-quiz-question', [AdminController::class, 'add_quiz_question'])->name('AddQuizQuestion');
        Route::post('add-quiz-question-store', [AdminController::class, 'add_quiz_question_store'])->name('AddQuizQuestionStore');
        Route::get('add-quiz-option', [AdminController::class, 'add_quiz_option'])->name('AddQuizOption');
        Route::post('add-quiz-option-store', [AdminController::class, 'add_quiz_option_store'])->name('AddQuizOptionStore');
        Route::get('quiz-list', [AdminController::class, 'quiz_list'])->name('QuizList');
        Route::post('delete-quiz/{id}', [AdminController::class, 'delete_quiz'])->name('DeleteQuiz');
        Route::get('update-quiz/{id}', [AdminController::class, 'update_quiz'])->name('UpdateQuiz');
        Route::post('update-quiz-option', [AdminController::class, 'update_quiz_option'])->name('UpdateQuizOption');
        Route::get('add-course-category', [AdminController::class, 'add_course_category'])->name('AddCourseCategory');
        Route::post('add-course-category-store', [AdminController::class, 'add_course_category_store'])->name('AddCourseCategoryStore');
        /** Blog Route **/
    });

    Route::prefix('/instructor/')->group(function () {
        Route::get('signin', [InstructorController::class, 'signin'])->name('SignIn');
        Route::post('instructor-login', [InstructorController::class, 'instructor_login'])->name('InstructorLogin');
        Route::get('signin', [InstructorController::class, 'signin'])->name('SignIn');
        Route::get('enrolled-student', [InstructorController::class, 'enrolled_student'])->name('EnrolledStudent');
        Route::get('instructor-request-course', [InstructorController::class, 'instructor_request_course'])->name('InstructorRequestCourseList');
        /** Quiz Route **/
        Route::get('instructor-add-quiz-question', [InstructorController::class, 'instructor_add_quiz_question'])->name('InstructorAddQuizQuestion');
        Route::post('instructor-add-quiz-question-store', [InstructorController::class, 'instructor_add_quiz_question_store'])->name('InstructorAddQuizQuestionStore');
        Route::get('instructor-add-quiz-option', [InstructorController::class, 'instructor_add_quiz_option'])->name('InstructorAddQuizOption');
        Route::post('instructor-add-quiz-option-store', [InstructorController::class, 'instructor_add_quiz_option_store'])->name('InstructorAddQuizOptionStore');
        Route::get('instructor-quiz-list', [InstructorController::class, 'instructor_quiz_list'])->name('InstructorQuizList');
        Route::post('instructor-delete-quiz/{id}', [InstructorController::class, 'instructor_delete_quiz'])->name('InstructorDeleteQuiz');
        Route::get('instructor-update-quiz/{id}', [InstructorController::class, 'instructor_update_quiz'])->name('InstructorUpdateQuiz');
        Route::post('instructor-update-quiz-option', [InstructorController::class, 'instructor_update_quiz_option'])->name('InstructorUpdateQuizOption');
        /** Quiz Route **/
    });

});




