<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <span key="t-dashboards">Dashboards</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    
                </ul>
            </li>
            <!-- Courses -->
            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <span key="t-dashboards">Courses</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('InstructorRequestCourseList') }}" key="t-saas">Requested Course</a></li>
                </ul>
            </li>
            <!-- Users -->
            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <span key="t-dashboards">Students</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="" key="t-saas">All Enrolled Students</a></li>
                </ul>
            </li>
            <!-- Quizes -->
            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <span key="t-dashboards">Quizzes/MCQ's</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('InstructorAddQuizQuestion') }}" key="t-default">Add Quiz Question</a></li>
                    <li><a href="{{ route('InstructorAddQuizOption') }}" key="t-saas">Add Quiz Option</a></li>
                    <li><a href="{{ route('InstructorQuizList') }}" key="t-saas">All Quizes</a></li>
                </ul>
            </li>

        </ul>
    </div>
    
</div>
</div>