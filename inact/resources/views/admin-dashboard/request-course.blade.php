@extends('admin-dashboard.layout')
@section('title', 'Request Course')
@section('content')
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

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
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Instrustor</th>
                                                    <th scope="col">Instrustor Country</th>
                                                    <th scope="col">Course Name</th>
                                                    <th scope="col">Course Duration</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($courseists as $courseist)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="javascript: void(0);" class="text-dark">{{ $courseist->name}}</a></h5>
                                                        <p class="text-muted mb-0">{{ $courseist->email}}</p>
                                                    </td>
                                                    <td>{{ $courseist->country}}</td>
                                                    <td>{{ $courseist->course_name}}</td>
                                                    <td>{{ $courseist->course_duration}}</td>
                                                    <td>{{ $courseist->created_at}}</td>
                                                    <td style="width: 100px; display: ruby;">
                                                        <form >
                                                        <a href="{{ route('ViewRequestedCourse', [$courseist->id]) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        </form>
                                                        <form action="{{ route('DeleteRequestCourse', [$courseist->id]) }}" method="post">
                                                            @csrf
                                                            <button class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </td>
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
                        
                    </div>
                </div>

                
@endsection
