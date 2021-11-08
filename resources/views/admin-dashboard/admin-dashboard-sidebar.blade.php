<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <!-- <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span> -->
                    <span key="t-dashboards">Dashboards</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    
                </ul>
            </li>
            <!-- Courses -->
            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <!-- <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span> -->
                    <span key="t-dashboards">Courses</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('CourseList') }}" key="t-saas">All Courses</a></li>
                    <li><a href="{{ route('AddCourseCategory') }}" key="t-saas">Add Course Category</a></li>
                    <li><a href="{{ route('AdminAddCourse') }}" key="t-default">Add Course</a></li>
                    <li><a href="{{ route('AdminAddVideo') }}" key="t-default">Add Video</a></li>
                    <li><a href="{{ route('AdminVideoList') }}" key="t-default">All Video</a></li>
                    <li><a href="{{ route('RequestCourseList') }}" key="t-saas">Requested Course</a></li>
                </ul>
            </li>
            <!-- Instructors -->
            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <!-- <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span> -->
                    <span key="t-dashboards">Instructors</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('CreateInstructorForm') }}" key="t-saas">Add Instructor</a></li>
                    <li><a href="{{ route('InstructorList') }}" key="t-saas">All Instructors</a></li>
                </ul>
            </li>
            <!-- Users -->
            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <!-- <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span> -->
                    <span key="t-dashboards">Students</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('UserList') }}" key="t-saas">All Students</a></li>
                    <li><a href="" key="t-saas">All Enrolled Students</a></li>
                </ul>
            </li>
            <!-- Blogs -->
            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <!-- <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span> -->
                    <span key="t-dashboards">Blogs</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('AddBlogCategory') }}" key="t-default">Add Blog Category</a></li>
                    <li><a href="{{ route('AddBlogs') }}" key="t-saas">Add Blog</a></li>
                    <li><a href="{{ route('BlogList') }}" key="t-saas">All Blog</a></li>
                </ul>
            </li>
            <!-- Quizes -->
            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <!-- <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span> -->
                    <span key="t-dashboards">Quizzes/MCQ's</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('AddQuizQuestion') }}" key="t-default">Add Quiz Question</a></li>
                    <li><a href="{{ route('AddQuizOption') }}" key="t-saas">Add Quiz Option</a></li>
                    <li><a href="{{ route('QuizList') }}" key="t-saas">All Quizes</a></li>
                </ul>
            </li>

            <!-- <li class="menu-title" key="t-apps">Apps</li> -->

        </ul>
    </div>
    
</div>
</div>