@extends('admin-dashboard.layout')
@section('title', 'Update Blog')
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

                                    <form action="{{ route('UpdateBlogStore') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="formrow-email-input" class="form-label">Blog Title</label>
                                                        <input type="text" class="form-control" name="blog_title" value="{{ $update_blogs->blog_title }}" id="formrow-email-input" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Blog Thumbnail</label>
                                                        <input type="file" name="blog_thumbnail" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">Blog Category</label>
                                                        <select id="formrow-inputState" name="blog_category" class="form-select">
                                                            <option selected>Choose...</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <li class="list-group-item mt-4">
                                                        <div class="form-check">
                                                            @if($update_blogs->blog_comment > 0)
                                                                <input class="form-check-input" name="blog_comment" type="checkbox" checked name="allow_comment">
                                                                <label class="form-check-label" for="container">Disallow Comment</label>
                                                            @else
                                                                <input class="form-check-input" name="blog_comment" type="checkbox" name="allow_comment">
                                                                <label class="form-check-label" for="container">Disallow Comment</label>
                                                            @endif
                                                        </div>
                                                    </li>
                                                </div>
                                                
                                            </div>
                                            
                                            <textarea id="elm1" name="blog_content">
                                                <?php echo $update_blogs->blog_content; ?>
                                            </textarea>

                                            <input name="blog_id" value="{{ $update_blogs->id }}" type="text" hidden>

                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            
@endsection
                
