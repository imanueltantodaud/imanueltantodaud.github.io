@extends('admin-dashboard.layout')
@section('title', 'Setup Course Outline')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Course Outline</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Course Outline</li>
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
                    @foreach($course_setup as $course_setups)
                        <div class="mb-3">
                            <label for="formname">Already Created Weeks :</label>
                            <input type="text" name="week_title" value="{{ $course_setups->weekly_title }}" class="form-control" readonly>
                        </div>
                        <hr>
                    @endforeach

                    <form action="{{ route('SetupCourseOutlineStore') }}" method="post" enctype="multipart/form-data" class="outer-repeater">
                        @csrf
                        <div data-repeater-list="outer_group" class="outer">
                            <div data-repeater-item class="outer">

                                <div class="mb-3">
                                    <!-- <label for="formname">Set Banner :</label> -->
                                    <!-- <input type="file" name="video_banner" class="form-control"> -->
                                    <input type="text" name="course_id" value="{{ $courses->id }}" hidden>
                                </div>

                                @if($course_setup == null)
                                
                                    <!-- Repeater -->

                                    <div class="mb-3">
                                        <label for="formname">Week Title :</label>
                                        <input type="text" name="week_title" class="form-control">
                                    </div>
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner_group" class="inner mb-3">
                                            <label>Videos :</label>
                                            <div data-repeater-item class="inner mb-3 row">

                                                <div class="col-md-9 col-9">
                                                    <select id="formrow-inputState" name="weekly_videos" class="form-select" required>
                                                        <option selected>Choose...</option>
                                                        @foreach(json_decode($courses_videos, true)  as $video)
                                                            <option value="{{ $video['id']  }}">{{ $video['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-3 col-3">
                                                    <div class="d-grid">
                                                        <input data-repeater-delete type="button" class="btn btn-primary inner" value="Delete"/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <input data-repeater-create type="button" class="btn btn-success inner" value="Add Video"/>
                                    </div>
                            
                                    <!-- Repeater -->
                                
                                <button type="submit" class="btn btn-primary">Submit</button>

                                @elseif($course_setup->count() == $courses->course_duration)

                                    <p>NO more course to outline!</p>

                                @else
                                
                                    <!-- Repeater -->
                                    
                                    <div class="mb-3">
                                        <label for="formname">Week Title :</label>
                                        <input type="text" name="week_title" class="form-control">
                                    </div>
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner_group" class="inner mb-3">
                                            <label>Videos :</label>
                                            <div data-repeater-item class="inner mb-3 row">

                                                <div class="col-md-9 col-9">
                                                    <select id="formrow-inputState" name="weekly_videos" class="form-select" required>
                                                        <option selected>Choose...</option>
                                                        @foreach(json_decode($courses_videos, true)  as $video)
                                                            <option value="{{ $video['id']  }}">{{ $video['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-3 col-3">
                                                    <div class="d-grid">
                                                        <input data-repeater-delete type="button" class="btn btn-primary inner" value="Delete"/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <input data-repeater-create type="button" class="btn btn-success inner" value="Add Video"/>
                                    </div>
                                
                                    <!-- Repeater -->
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                @endif
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
