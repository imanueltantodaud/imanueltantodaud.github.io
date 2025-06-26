@extends('admin-dashboard.layout')
@section('title', 'Quiz List')
@section('content')
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Quiz</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Quiz</li>
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
                                                        <th>ID</th>
                                                        <th>Quiz Question</th>
                                                        <th>Course</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($quiz_ists as $quiz_ist)
                                                    <tr data-id="1">
                                                        <td data-field="id" style="width: 80px">{{$loop->iteration}}</td>
                                                        <td data-field="name">{{ $quiz_ist->question }}</td>
                                                        <td data-field="age">{{ $quiz_ist->course_title }}</td>
                                                        <td data-field="age">{{ $quiz_ist->created_at }}</td>
                                                        <!-- <td data-field="gender">Male</td> -->
                                                        <td style="width: 100px; display: ruby;">
                                                            <form >
                                                            <a href="{{ route('UpdateQuiz', [$quiz_ist->id]) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            </form>
                                                            <form action="{{ route('DeleteQuiz', [$quiz_ist->id]) }}" method="post">
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
                                        {{ $quiz_ists->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

@endsection
