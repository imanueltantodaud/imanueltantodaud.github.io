@extends('instructor-dashboard.layout')
@section('title', 'Add Quiz Question')
@section('content')
            
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Create Quiz Question</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Create Quiz Question</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

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
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                    <form action="{{ route('InstructorAddQuizQuestionStore') }}" method="post">
                                            @csrf
                                        <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="formrow-email-input" class="form-label">Question</label>
                                                        <input type="text" class="form-control" name="question" id="formrow-email-input" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">Course</label>
                                                        <select id="formrow-inputState" name="course" class="form-select">
                                                            <option selected>Choose...</option>
                                                            @foreach($courses as $course)
                                                                <option value="0">None</option>
                                                                <option value="{{ $course->id }}">{{ $course->course_title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- <div class="col-lg-4">
                                                    <li class="list-group-item mt-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="allow_comment">
                                                            <label class="form-check-label" for="container">Allow Comment</label>
                                                        </div>
                                                    </li>
                                                </div> -->
                                                
                                            </div>

                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

@endsection
