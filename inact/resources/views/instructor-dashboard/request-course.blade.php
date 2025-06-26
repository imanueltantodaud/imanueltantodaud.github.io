@extends('instructor-dashboard.layout')
@section('title', 'Request Course')
@section('content')
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Requested Course List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Course</a></li>
                                            <li class="breadcrumb-item active">Requested Course List</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Instrustor</th>
                                                    <th scope="col">Course Price</th>
                                                    <th scope="col">Course Name</th>
                                                    <th scope="col">Course Duration</th>
                                                    <th scope="col">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($courseists as $courseist)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="javascript: void(0);" class="text-dark">{{ $courseist->first_name}} {{ $courseist->last_name}}</a></h5>
                                                        <p class="text-muted mb-0">{{ $courseist->email}}</p>
                                                    </td>
                                                    <td>${{ $courseist->course_price}}</td>
                                                    <td>{{ $courseist->course_title}}</td>
                                                    <td>{{ $courseist->course_duration}} Weeks</td>
                                                    <td>{{ $courseist->created_at}}</td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="text-center my-3">
                                    <a href="javascript:void(0);" class="text-success"><i class="bx bx-loader bx-spin font-size-18 align-middle me-2"></i> Load more </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
@endsection
