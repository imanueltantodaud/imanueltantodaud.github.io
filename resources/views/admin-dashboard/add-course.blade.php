@extends('admin-dashboard.layout')
@section('title', 'Add Course')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Course</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Add Course</li>
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
                    <form action="{{ route('AdminAddCourseStore') }}" method="post" enctype="multipart/form-data" class="outer-repeater">
                        @csrf
                        <div data-repeater-list="outer_group" class="outer">
                            <div data-repeater-item class="outer">

                                <div class="mb-3">
                                    <label for="formname">Instructor :</label>
                                    <!-- <input type="text" name="user_id" class="form-control" placeholder="Enter the instructor name"> -->
                                    <select id="formrow-inputState" name="user_id" class="form-select">
                                        <option selected>Choose...</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->user_id  }}">{{ $user->first_name }} {{ $user->last_name }}</option>
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
                                                    <option value="{{ $course_category->id  }}">{{ $course_category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail">Course Tags :</label>
                                            <select id="formrow-inputState" name="course_tags" class="form-select">
                                                <option selected>Choose...</option>
                                                    <option value="New">New</option>
                                                    <option value="Coming">Coming</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Course Title :</label>
                                    <input type="text" name="course_title" class="form-control" placeholder="Enter the course name">
                                </div>

                                <div class="mb-3">
                                    <label for="formmessage">Course Description :</label>
                                    <textarea id="formmessage" name="course_description" class="form-control" placeholder="About Course" rows="3"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Course Fee :</label>
                                    <input type="text" name="course_fee" class="form-control" placeholder="Enter the amount">
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Course Duration :</label>
                                    <input type="text" name="course_duration" class="form-control" placeholder="Enter the Course Duration">
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Weely Study Hours :</label>
                                    <input type="text" name="weekly_study" class="form-control" placeholder="Enter the number of hours">
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Course Project :</label>
                                    <input type="text" name="projects" class="form-control" placeholder="Enter the course syllabus">
                                </div>

                                <div class="mb-3">
                                    <label for="formmessage">About Course :</label>
                                    <textarea id="formmessage" name="about_course" class="form-control" placeholder="About the course" rows="3"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="formmessage">Course Brief :</label>
                                    <textarea id="formmessage" name="about_brief" placeholder="Course overview" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="formmessage">Author Description :</label>
                                    <textarea id="formmessage" name="author_description" placeholder="About Author" class="form-control" rows="3"></textarea>
                                </div>

                                <!-- Repeater -->

                                <!-- <div class="inner-repeater mb-4">
                                    <div data-repeater-list="inner_group" class="inner mb-3">
                                        <label>Videos :</label>
                                        <div data-repeater-item class="inner mb-3 row">

                                            <div class="col-md-3 col-3">
                                                <input type="text" name="video_name" class="inner form-control" placeholder="Enter Video Name"/>
                                            </div>

                                            <div class="col-md-3 col-3">
                                                <input type="text" name="video_duration" class="inner form-control" placeholder="Enter Video Duration"/>
                                            </div>
                                            
                                            <div class="mb-3 col-lg-3">
                                                <input type="file" name="videos" class="form-control" id="resume">
                                            </div>

                                            <div class="col-md-3 col-3">
                                                <div class="d-grid">
                                                    <input data-repeater-delete type="button" class="btn btn-primary inner" value="Delete"/>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <input data-repeater-create type="button" class="btn btn-success inner" value="Add Video"/>
                                </div> -->
                            
                                <!-- Repeater -->

                                <div class="inner-repeater mb-4">
                                    <div data-repeater-list="inner_groupB" class="inner mb-3">
                                        <label>Relative Course :</label>
                                        <div data-repeater-item class="inner mb-3 row">
                                            <div class="col-md-10 col-8">
                                                <input type="text" name="related_courses" class="inner form-control" placeholder="Enter Related Course"/>
                                            </div>
                                            <div class="col-md-2 col-4">
                                                <div class="d-grid">
                                                    <input data-repeater-delete type="button" class="btn btn-primary inner" value="Delete"/>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <input data-repeater-create type="button" class="btn btn-success inner" value="Add Related Course"/>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
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

    /** AJAX SEARCH **/

    // $('#resume').on('change',function(){
    //     alert('IN');
    //     var value = $(this).val();
    //     alert(value);

    //     $.ajax({
    //         url: '',
    //         type: 'post',
    //         data: {
    //             _token: "{{ csrf_token() }}",
    //             'user_id': "{{request()->user->user_id}}",
    //             'search': value,
    //             'flags': 1,
                
    //         },
    //         success: function (data) {
    //             //console.log(data);
    //             // $('.step-1').html(data);
    //         }
    //     }); 
    // });

/** AJAX SEARCH **/

</script>

@endsection
