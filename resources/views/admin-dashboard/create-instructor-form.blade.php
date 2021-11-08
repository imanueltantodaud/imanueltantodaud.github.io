@extends('admin-dashboard.layout')
@section('title', 'Create Instructor Form')
@section('content')            
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Create Instructor</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Create Instructor</li>
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

                                        <form action="{{ route('AdminCreateInstructor') }}" method="post">
                                            @csrf
                                        <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-email-input" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" name="first_name" id="formrow-email-input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" name="last_name" id="formrow-password-input">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-email-input" class="form-label">Email</label>
                                                        <input type="email" class="form-control" name="email" id="formrow-email-input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Password</label>
                                                        <input type="password" class="form-control" name="password" id="formrow-password-input">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">City</label>
                                                        <input type="text" class="form-control" name="city" id="formrow-inputCity">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">State</label>
                                                        <select id="formrow-inputState" name="state" class="form-select">
                                                            <option selected>Choose...</option>
                                                            <option value="2">Egypt</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputZip" class="form-label">Postal Code</label>
                                                        <input type="text" class="form-control" name="postal_code" id="formrow-inputZip">
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

@endsection
                
