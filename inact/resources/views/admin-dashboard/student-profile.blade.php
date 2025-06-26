@extends('admin-dashboard.layout')
@section('title', 'Student Profile')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Student Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Student Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="outer-repeater">
                        @csrf
                        <div data-repeater-list="outer_group" class="outer">
                            <div data-repeater-item class="outer">

                                <div class="mb-3">
                                    <label for="formname">Name :</label>
                                    <input type="text" readonly name="user_id" class="form-control" value="{{ $user->first_name }} {{ $user->last_name }}" placeholder="Enter your Name...">
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formemail">Email :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->email }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formemail">Phone :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->phone }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formemail">dob :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->dob }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail">Address :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->address }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail">City :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->city }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail">State :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->state }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail">Country :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->name }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    
    </div>

    <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Student Profile Details</h4>

                </div>
            </div>
        </div>
        
    <div class="row">
    <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="outer-repeater">
                        @csrf
                        <div data-repeater-list="outer_group" class="outer">
                            <div data-repeater-item class="outer">

                                <div class="mb-3">
                                    <label for="formname">Date of Login :</label>
                                    <input type="text" readonly name="user_id" class="form-control" value="{{ $user->created_at }}" placeholder="Enter your Name...">
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formemail">Starting and ending date Enrolled Course :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->email }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formemail"># of subscribed courses :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->phone }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formemail"># of watched videos :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->dob }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail"># of earned certificates :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->address }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail">How many # of views left for each video :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->city }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail"># of quizzes taken/Marks :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->state }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formemail"># of completed assignments :</label>
                                            <input type="text" readonly name="course_title" value="{{ $user->name }}" class="form-control" placeholder="Enter your Email...">
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('UserList') }}" class="btn btn-primary">Back</a>
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
