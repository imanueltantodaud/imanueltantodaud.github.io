@extends('admin-dashboard.layout')
@section('title', 'Update Course')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">View/Update Course</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">View/Update Course</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            @if(session()->has('request_error'))
                <div class="col-md-12">
                    <div class="alert alert-danger mt-5">
                        {{ session('request_error') }}
                    </div>
                    {{ session()->forget('request_error') }}
                </div>
            @elseif (session()->has('request_success') )
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show mt-5"> 
                        <strong>Success! </strong> {{ session('request_success') }}
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> -->
                    </div>
                    {{ session()->forget('request_success') }}
                </div>
            @endif 
        
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('UpdateCourses') }}" method="post" enctype="multipart/form-data" class="outer-repeater">
                        @csrf
                        <div data-repeater-list="outer_group" class="outer">
                            <div data-repeater-item class="outer">

                                <div class="mb-3">
                                    <label for="formname">Instructor :</label>
                                    <select id="formrow-inputState" name="user_id" class="form-select">
                                        <option selected>Choose...</option>
                                        @foreach($users as $user)
                                            <option {{ ($users_course->course_user_id) == ( $user->user_id ) ? 'selected' : '' }} value="{{ $user->user_id  }}">{{ $user->first_name }} {{ $user->last_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail">Course Category :</label>
                                            <select id="formrow-inputState" name="course_category" class="form-select">
                                                <option selected>Choose...</option>
                                                @foreach($course_categories as $course_category)
                                                    <option {{ ($users_course->course_category_id) == ( $course_category->id ) ? 'selected' : '' }} value="{{ $course_category->id  }}">{{ $course_category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail">Course Tags :</label>
                                            <select id="formrow-inputState" name="course_tags" class="form-select">
                                                <option selected>Choose...</option>
                                                    <option {{ ($users_course->course_tags) == 'New' ? 'selected' : '' }} value="New">New</option>
                                                    <option {{ ($users_course->course_tags) == 'Coming' ? 'selected' : '' }} value="Coming">Coming</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Course Title :</label>
                                    <input type="text" name="course_title" value="{{ $users_course->course_title }}" class="form-control" placeholder="Enter the course name">
                                </div>

                                <div class="mb-3">
                                    <label for="formmessage">Course Description :</label>
                                    <textarea id="formmessage" name="course_description" class="form-control" placeholder="About Course" rows="3">{{ $users_course->course_description }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Course Fee :</label>
                                    <input type="text" name="course_fee" value="{{ $users_course->course_price }}" class="form-control" placeholder="Enter the amount">
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Course Duration :</label>
                                    <input type="text" name="course_duration" value="{{ $users_course->course_duration }}" class="form-control" placeholder="Enter the Course Duration">
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Weekly Study Hours :</label>
                                    <input type="text" name="weekly_study" value="{{ $users_course->weekly_study }}" class="form-control" placeholder="Enter the number of hours">
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Course Project :</label>
                                    <input type="text" name="projects" value="{{ $users_course->projects }}" class="form-control" placeholder="Enter the course syllabus">
                                </div>

                                <div class="mb-3">
                                    <label for="formmessage">About Course :</label>
                                    <textarea id="formmessage" name="about_course" class="form-control" placeholder="About the course" rows="3">{{ $users_course->about_course }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="formmessage">Course Brief :</label>
                                    <textarea id="formmessage" name="about_brief" placeholder="Course overview" class="form-control" rows="3">{{ $users_course->author_description }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="formmessage">Author Description :</label>
                                    <textarea id="formmessage" name="author_description" placeholder="About Author" class="form-control" rows="3">{{ $users_course->author_description }}</textarea>
                                </div>

                                <div class="inner-repeater mb-4">
                                    <div data-repeater-list="inner_groupB" class="inner mb-3">
                                        <label>Relative Course :</label>
                                        
                                        <?php $orders = json_decode($users_course->related_courses, true); 
                                            // foreach($orders as $order){
                                                
                                            //     echo $order['related_courses'];
                                            // }
                                        ?>
                                        
                                        @foreach($orders as $order)
                                            
                                       
                                        <div data-repeater-item class="inner mb-3 row">
                                            <div class="col-md-10 col-8">
                                                <input type="text" name="related_courses" value="{{ $order['related_courses'] }}" class="inner form-control" placeholder="Enter Related Course"/>
                                            </div>
                                            <div class="col-md-2 col-4">
                                                <div class="d-grid">
                                                    <input data-repeater-delete type="button" class="btn btn-primary inner" value="Delete"/>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        @endforeach
                                    </div>
                                    <input data-repeater-create type="button" class="btn btn-success inner" value="Add Related Course"/>
                                </div>
                                   
                                <input type="text" name="course_id" value="{{ $users_course->id }}" hidden>
                                <a href="{{ route('CourseList') }}" type="button" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                        
    </div> 
</div>

@endsection

@section('script')

<script>

    /*$(document).ready(function() {
        document.title = 'Add Course | InAct';
    });*/

</script>

@endsection
