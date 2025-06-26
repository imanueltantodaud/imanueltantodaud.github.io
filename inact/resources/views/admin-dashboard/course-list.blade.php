@extends('admin-dashboard.layout')
@section('title', 'Course List')
@section('content')
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">All Courses</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">All Courses</li>
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
        
                                        <!-- <h4 class="card-title">Table Edit</h4> -->
                                        <!-- <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows editable.</p> -->
        
                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Course Name</th>
                                                        <th>Course ID</th>
                                                        <th># Enrolled Students</th>
                                                        <th>Instructor Name</th>
                                                        <th>Instructor ID</th>
                                                        <th>Course Fees</th>
                                                        <th>Course Duration</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($courses as $course)
                                                    <tr data-id="{{$loop->iteration}}">
                                                        <td data-field="id" style="width: 80px">{{$loop->iteration}}</td>
                                                        <td data-field="name">{{ $course->course_title }}</td>
                                                        <td data-field="name">{{ $course->id }}</td>
                                                        <td data-field="name">{{ $course->number_students }}</td>
                                                        <td data-field="age">{{ $course->first_name }} {{ $course->last_name }}</td>
                                                        <td data-field="gender">{{ $course->id }}</td>
                                                        <td data-field="gender">{{ $course->course_price }}</td>
                                                        <td data-field="gender">{{ $course->course_duration }}</td>
                                                        <td style="width: 100px">
                                                            <a href="{{ route('SetupCourseOutline', [$course->id]) }}" class="btn btn-outline-secondary btn-sm edit" title="Course Outline">
                                                                <i class="fas fa-tasks"></i>
                                                            </a>

                                                            <a href="{{ route('UpdateCourseView', [$course->id]) }}" class="btn btn-outline-secondary btn-sm edit" title="Course Information">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        {{ $courses->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

@endsection
