<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign in |</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="{{ asset('login/images/icons/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('templet/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templet/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templet/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templet/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templet/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templet/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templet/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templet/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templet/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templet/css/main.css')}}">
</head>
<style>
body{
	background: url('/img/logo.jpeg')
}
</style>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url {{ asset('login/images/bg-01.jpg') }};">
			<div class="wrap-login100">

            <form method="POST" action="{{ route('login') }}">
                            @csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
					Sign in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
					<div class="col-md-8 offset-md-4">
						<button type="submit" class="btn btn-light">
							{{ __('Login') }}
							<?php   
							echo '<script type ="text/JavaScript">';  
							echo 'alert("Login Sukses")';  
							echo '</script>';  
						?>
						</button>
						<a class="ml-none"  href="{{ route('register') }}" >Register</a>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="{{ asset('templet/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('templet/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{ asset('templet/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('templet/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('templet/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('templet/vendor/select2/select2.min.js')}}"></script>
	<script src="{{ asset('templet/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('templet/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{ asset('templet/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{ asset('templet/js/main.s')}}"></script>

</body>
</html>