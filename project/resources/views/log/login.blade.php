<!doctype html>
<html lang="en">
  <head>
  	<title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="log/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(log/images/back10.jpg);">
	

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
				<div class="col-md-6 text-center mb-3">
					
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="/login" class="signin-form" method="post">
					@csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="email" placeholder="Email address" required>
		      		</div>
					  @error('email')
						 <div style="color: red">{{$message}} </div>
					  @enderror
					  @if ($message = Session::get('email_incorrect'))
					  <div style="color: red">{{$message}} </div>
					  @endif
					  <div class="form-group">
						  <input id="password-field" type="password" class="form-control" placeholder="Password" name="pass" required>
						  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						</div>
						@error('pass')
						<div style="color: red">{{$message}} </div>
						@enderror
						@if ($message = Session::get('incorrect_password'))
						<div style="color: red">{{$message}} </div>
						@endif
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" >Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	{{-- <label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label> --}}
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span><i style='font-size:18px' class='fab'>&#xf39e;</i></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span><i style='font-size:18px' class='fab'>&#xf16d;</i></span> Instagram</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

