@extends('admin-dashboard.layout')
@section('title', 'Blog List')
@section('content')
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Blog</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Blog</li>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <!-- <h4 class="card-title">Table Edit</h4> -->
                                        <!-- <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows editable.</p> -->
        
                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <!-- <th>Gender</th> -->
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($blogs as $blog)
                                                    <tr data-id="1">
                                                        <td data-field="id" style="width: 80px">{{$loop->iteration}}</td>
                                                        <td data-field="name">{{ $blog->blog_title }}</td>
                                                        @if($blog->category_title)
                                                            <td data-field="age">{{ $blog->category_title }}</td>
                                                        @else
                                                            <td data-field="age">None</td>
                                                        @endif
                                                        <!-- <td data-field="gender">Male</td> -->
                                                        <td style="width: 100px">
                                                            <a href="{{ route('UpdateBlog', [$blog->id]) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        {{ $blogs->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

@endsection
