@extends('instructor-dashboard.layout')
@section('title', 'Update Quiz')
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

                                    <form action="{{ route('InstructorUpdateQuizOption') }}" method="post">
                                        @csrf

                                        <div class="row">
                                                
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="formrow-inputState" class="form-label">Quiz Question</label>
                                                    <input type="text" name="question" value="{{ $quizes->question }}" class="form-control">
                                                    <input type="text" name="question_id" value="{{ $quizes->id }}" hidden>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Option A</label>
                                                    <input type="text" class="form-control" name="option_a" value="{{ $quizes->option_a }}" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <label for="formrow-inputState" class="form-label">Answer A</label>
                                                    <select id="formrow-inputState" name="answer_a" class="form-select">
                                                        <option selected>Choose...</option>
                                                            <option {{ ($quizes->option_answer_a) == '1' ? 'selected' : '' }} value="1">Right</option>
                                                            <option {{ ($quizes->option_answer_a) == '0' ? 'selected' : '' }} value="0">Wrong</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Option B</label>
                                                    <input type="text" class="form-control" name="option_b" value="{{ $quizes->option_b }}" id="formrow-email-input" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <label for="formrow-inputState" class="form-label">Answer B</label>
                                                    <select id="formrow-inputState" name="answer_b" class="form-select">
                                                        <option selected>Choose...</option>
                                                            <option {{ ($quizes->option_answer_b) == '1' ? 'selected' : '' }} value="1">Right</option>
                                                            <option {{ ($quizes->option_answer_b) == '0' ? 'selected' : '' }} value="0">Wrong</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Option C</label>
                                                    <input type="text" class="form-control" name="option_c" value="{{ $quizes->option_c }}" id="formrow-email-input" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <label for="formrow-inputState" class="form-label">Answer C</label>
                                                    <select id="formrow-inputState" name="answer_C" class="form-select">
                                                        <option selected>Choose...</option>
                                                            <option {{ ($quizes->option_answer_c) == '1' ? 'selected' : '' }} value="1">Right</option>
                                                            <option {{ ($quizes->option_answer_c) == '0' ? 'selected' : '' }} value="0">Wrong</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Option D</label>
                                                    <input type="text" class="form-control" name="option_d" value="{{ $quizes->option_d }}" id="formrow-email-input" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <label for="formrow-inputState" class="form-label">Answer D</label>
                                                    <select id="formrow-inputState" name="answer_d" class="form-select">
                                                        <option selected>Choose...</option>
                                                            <option {{ ($quizes->option_answer_d) == '1' ? 'selected' : '' }} value="1">Right</option>
                                                            <option {{ ($quizes->option_answer_d) == '0' ? 'selected' : '' }} value="0">Wrong</option>
                                                    </select>
                                                </div>
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
