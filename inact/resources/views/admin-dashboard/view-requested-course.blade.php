@extends('admin-dashboard.layout')
@section('title', 'View Requested Course')
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
                                    <label for="formname">Instructor Email:</label>
                                    <input type="text" value="{{ $request_course->email}}" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail">Instructor Name :</label>
                                            <input type="text" value="{{ $request_course->name}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail">Instructor Country :</label>
                                            <input type="text" value="{{ $request_course->country}}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Course Title :</label>
                                    <input type="text" value="{{ $request_course->course_name}}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Instructor Resume :</label>
                                    <input type="text" value="{{ $request_course->resume}}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Instructor Lecture Sample :</label>
                                    <input type="text" value="{{ $request_course->lecture_sample}}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="formemail">Instructor Course Duration :</label>
                                    <input type="text" value="{{ $request_course->course_duration}}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="formmessage">Course Description :</label>
                                    <textarea id="formmessage"  class="form-control" rows="3">{{ $request_course->course_description}}</textarea>
                                </div>

                                <a href="{{ route('RequestCourseList') }}" type="button" class="btn btn-primary">Back</a>
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

    $(document).ready(function() {
        document.title = 'View Requested Course | InAct';
    });

</script>

@endsection
