@extends('admin-dashboard.layout')
@section('title', 'User List')
@section('content')
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Students</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Students</li>
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
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($users as $user)
                                                    <tr data-id="1">
                                                        <td data-field="id" style="width: 80px">{{$loop->iteration}}</td>
                                                        @if($user->image)
                                                            <td data-field="id" style="width: 80px"><img src="{{ asset('$user->image') }}" height="36" width="36"></td>
                                                        @else
                                                            <td data-field="id" style="width: 80px"><img src="{{ asset('assets/images/icon-user.png') }}" height="36" width="36"></td>
                                                        @endif
                                                        <td data-field="name">{{ $user->first_name }} {{ $user->last_name }}</td>
                                                        <td data-field="age">{{ $user->email }}</td>
                                                        @if($user->phone)
                                                            <td data-field="age">{{ $user->phone }}</td>
                                                        @else
                                                            <td data-field="age">None</td>
                                                        @endif
                                                        <td data-field="age">{{ $user->created_at }}</td>
                                                        <td style="width: 100px; display: block ruby;margin: 10px 0 0px 0px;">
                                                            <form >
                                                                <a href="{{ route('StudentProfile', [$user->id]) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </form>
                                                            @if($user->flags == 6)
                                                                <form action="{{ route('UnTerminateStudent', [$user->id]) }}" method="post">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-outline-secondary btn-sm edit" title="Resume">
                                                                        <i class="fas fa-user-alt"></i>
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <form action="{{ route('TerminateStudent', [$user->id]) }}" method="post">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-outline-secondary btn-sm edit" title="Terminate">
                                                                        <i class="fas fa-user-alt-slash"></i>
                                                                    </button>
                                                                </form>
                                                            @endif
                                                            <form action="{{ route('DeleteStudent', [$user->id]) }}" method="post">
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
                                            <a href="{{ route('ExportVideos') }}" class="btn btn-primary">Export</a>
                                        </div>
                                        {{ $users->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

@endsection
