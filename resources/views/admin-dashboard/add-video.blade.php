@extends('admin-dashboard.layout')
@section('title', 'Add Video')
@section('content')            
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Course Videos</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Add Course Videos</li>
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

                                    <form action="{{ route('AdminAddVideoStore') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">Course</label>
                                                        <select id="formrow-inputState" name="course_id" class="form-select">
                                                            <option selected>Choose...</option>
                                                            @foreach($Courses as $Course)
                                                                <option value="{{ $Course->id }}">{{ $Course->course_title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">Video Title</label>
                                                        <input type="text" name="video_name" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Video Duration</label>
                                                        <input type="text" name="video_duration" class="form-control" required>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="formemail">Video :</label>
                                                        <input type="text" name="video" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Video Attachment</label>
                                                        <input type="file" name="video_attachment" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="formemail">Video Description :</label>
                                                    <textarea id="formmessage" name="video_description" class="form-control" placeholder="About the course" rows="3"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

@endsection
