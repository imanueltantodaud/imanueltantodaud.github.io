@extends('admin-dashboard.layout')
@section('title', 'Add Quiz Option')
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

                                    <form action="{{ route('AddQuizOptionStore') }}" method="post">
                                        @csrf

                                        <div class="row">
                                                
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="formrow-inputState" class="form-label">Quiz Question</label>
                                                    <select id="formrow-inputState" name="quiz" class="form-select" required>
                                                        <option selected>Choose...</option>
                                                        @foreach($quizes as $quiz)
                                                            <option value="{{ $quiz->id }}">{{ $quiz->question }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- <div class="col-lg-4">
                                                <li class="list-group-item mt-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="allow_comment">
                                                        <label class="form-check-label" for="container">Allow Comment</label>
                                                    </div>
                                                </li>
                                            </div> -->
                                            
                                        </div>

                                        <div class="row">

                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Option A</label>
                                                    <input type="text" class="form-control" name="option_a" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <label for="formrow-inputState" class="form-label">Answer A</label>
                                                    <select name="answer_a" id="answer_a" class="form-select">
                                                        <option selected>Choose...</option>
                                                            <option value="1">Right</option>
                                                            <option value="0">Wrong</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Option B</label>
                                                    <input type="text" class="form-control" name="option_b" id="formrow-email-input" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <label for="formrow-inputState" class="form-label">Answer B</label>
                                                    <select id="answer_b" name="answer_b" class="form-select">
                                                        <option selected>Choose...</option>
                                                            <option value="1">Right</option>
                                                            <option value="0">Wrong</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Option C</label>
                                                    <input type="text" class="form-control" name="option_c" id="formrow-email-input" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <label for="formrow-inputState" class="form-label">Answer C</label>
                                                    <select id="answer_c" name="answer_C" class="form-select">
                                                        <option selected>Choose...</option>
                                                            <option value="1">Right</option>
                                                            <option value="0">Wrong</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Option D</label>
                                                    <input type="text" class="form-control" name="option_d" id="formrow-email-input" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="mb-3">
                                                    <label for="formrow-inputState" class="form-label">Answer D</label>
                                                    <select id="answer_d" name="answer_d" class="form-select">
                                                        <option selected>Choose...</option>
                                                            <option value="1">Right</option>
                                                            <option value="0">Wrong</option>
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

@section('script')

<script>
    
    $('#answer_a').on('change', function() {

        var value = this.value;
        if( value == '1'){
            $("#answer_b").val("0");
            $("#answer_b").prop('disabled', 'disabled');
            $("#answer_c").val("0");
            $("#answer_c").prop('disabled', 'disabled');
            $("#answer_d").val("0");
            $("#answer_d").prop('disabled', 'disabled');
        }
    });

    $('#answer_b').on('change', function() {

        var value = this.value;
        if( value == '1'){
            $("#answer_a").val("0");
            $("#answer_a").prop('disabled', 'disabled');
            $("#answer_c").val("0");
            $("#answer_c").prop('disabled', 'disabled');
            $("#answer_d").val("0");
            $("#answer_d").prop('disabled', 'disabled');
        }
    });

    $('#answer_c').on('change', function() {

        var value = this.value;
        if( value == '1'){
            $("#answer_a").val("0");
            $("#answer_a").prop('disabled', 'disabled');
            $("#answer_b").val("0");
            $("#answer_b").prop('disabled', 'disabled');
            $("#answer_d").val("0");
            $("#answer_d").prop('disabled', 'disabled');
        }
    });

    $('#answer_d').on('change', function() {

        var value = this.value;
        if( value == '1'){
            $("#answer_a").val("0");
            $("#answer_a").prop('disabled', 'disabled');
            $("#answer_b").val("0");
            $("#answer_b").prop('disabled', 'disabled');
            $("#answer_c").val("0");
            $("#answer_c").prop('disabled', 'disabled');
        }
    });
</script>

@endsection
