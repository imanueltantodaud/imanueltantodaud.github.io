<!doctype html>
	<html lang="en">

		<head>
			
			<meta charset="utf-8" />
			<title>Login | InAct</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- App favicon -->
			<!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
			<link href="{{ URL::asset('assets/images/chat-icon.png') }}" type="image/png" rel="icon">

			<!-- Bootstrap Css -->
			<link href="{{ URL::asset('assets/admin-css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
			<!-- Icons Css -->
			<link href="{{ URL::asset('assets/admin-css/icons.min.css') }}" rel="stylesheet" type="text/css" />
			<!-- App Css-->
			<link href="{{ URL::asset('assets/admin-css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

		</head>
		<body>
			<div class="account-pages my-5 pt-sm-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 col-lg-6 col-xl-5">
							<div class="card overflow-hidden">
								<div class="bg-primary bg-soft">
									<div class="row">
										<div class="col-7">
											<div class="text-primary p-4">
												<h5 class="text-primary">Hi Instructor!</h5>
												<p>Sign in to continue to InAct.</p>
											</div>
										</div>
										<div class="col-5 align-self-end">
											<img src="assets/images/profile-img.png" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="card-body pt-0"> 
									<div class="auth-logo">
										<a href="index.html" class="auth-logo-light">
											<div class="avatar-md profile-user-wid mb-4">
												<span class="avatar-title rounded-circle bg-light">
													<img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
												</span>
											</div>
										</a>

										<a href="index.html" class="auth-logo-dark">
											<div class="avatar-md profile-user-wid mb-4">
												<span class="avatar-title rounded-circle bg-light">
													<img src="{{asset('assets/images/chat-icon.png')}}" alt="" class="rounded-circle" height="34">
												</span>
											</div>
										</a>
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
									<div class="p-2">
										<form class="form-horizontal" method="post" action="{{ route('InstructorLogin') }}">
											@csrf
											<div class="mb-3">
												<label for="username" class="form-label">Username</label>
												<input type="text" name="email" class="form-control" id="username" placeholder="Enter username">
											</div>
					
											<div class="mb-3">
												<label class="form-label">Password</label>
												<div class="input-group auth-pass-inputgroup">
													<input type="password" name="password" class="form-control" id="password_signup" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
													<button class="btn btn-light " type="button" id="password-addon" onclick="myFunctionsignup()"><i class="mdi mdi-eye-outline"></i></button>
												</div>
											</div>

											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="remember-check">
												<label class="form-check-label" for="remember-check">
													Remember me
												</label>
											</div>
											
											<div class="mt-3 d-grid">
												<button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
											</div>

											<div class="mt-4 text-center">
												<a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
											</div>
										</form>
									</div>
				
								</div>
							</div>

							<div class="mt-5 text-center">
								<div>
									<p>?? <script>document.write(new Date().getFullYear())</script> InAct.</p>
									<small>Design & develop by SourceIgnite</small>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- end account-pages -->

			<!-- JAVASCRIPT -->
			<script src="assets/libs/jquery/jquery.min.js"></script>
			<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/libs/metismenu/metisMenu.min.js"></script>
			<script src="assets/libs/simplebar/simplebar.min.js"></script>
			<script src="assets/libs/node-waves/waves.min.js"></script>
			
			<!-- App js -->
			<script src="assets/js/app.js"></script>

            <script>

                function myFunctionsignup() {
                    var x = document.getElementById("password_signup");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
                
            </script>
		</body>
	</html>
