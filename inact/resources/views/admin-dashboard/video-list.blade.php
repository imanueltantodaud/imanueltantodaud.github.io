@extends('admin-dashboard.layout')
@section('title', 'Video List')
@section('content')
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">All Videos</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">All Videos</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

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

                                        <!-- <h4 class="card-title">Table Edit</h4> -->
                                        <!-- <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows editable.</p> -->
        
                                        <div class="table-responsive">
                                        
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Course Name</th>
                                                        <th>Video Title</th>
                                                        <th>Duration</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($video_Courses as $video_Course)
                                                    <tr data-id="1">
                                                        <td data-field="id" style="width: 80px">{{$loop->iteration}}</td>
                                                        <td data-field="name">{{ $video_Course->course_title }}</td>
                                                        <td data-field="age">{{ $video_Course->name }}</td>
                                                        <td data-field="age">{{ $video_Course->total_time }}</td>
                                                        <td data-field="age">{{ $video_Course->created_at }}</td>
                                                        <td style="width: 100px; display: block ruby;margin: 10px 0 0px 0px;">
                                                            <form >
                                                                <a href="" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </form>
                                                           
                                                            <form action="{{ route('DeleteVideo', [$video_Course->id]) }}" method="post">
                                                                @csrf
                                                                <button class="btn btn-outline-secondary btn-sm edit" title="Delete">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        {{ $video_Courses->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

@endsection
