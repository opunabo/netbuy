<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" type="image/png" href="login_v1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_v1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_v1/css/main.css">
<!--===============================================================================================-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
	<script type="text/javascript">  
	$(document).ready(function()  
	{  
	    $('.signup').hide();  
	    $('#signup').click(function()  
	    {  
	    $('.login').slideUp('slow');  
	    $('.signup').slideDown('slow');  
	    });  
	    $('#login').click(function()  
	    {  
	        $('.signup').slideUp('slow');  
	        $('.login').slideDown('slow');  
	    });   
	});  
</script>
</head>
<body >

	<!-- <form name="myform">  
	 <input type="radio" name="option" id="login" checked="checked"> <span class="option">Login</span>  
	 <input type="radio" name="option" id="signup"> <span class="option">Sign up</span>  
	</form>  -->
	
	<div class="login">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login_v1/images/img-01.png" alt="IMG">
					<img src="images/netbuylogo.jpeg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="dashboard.php" method="post">
					<span class="login100-form-title">
						LOG INTO YOUR ACCOUNT
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					
					<div class="text-center p -t-136">
						<a class="txt2" id="signup">
							No Account? Sign-Up
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="signup">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login_v1/images/img-01.png" alt="IMG">
					<img src="images/netbuylogo.jpeg" alt="IMG">
				</div>

				<form action="dashboard.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Start Selling On NetBuy
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Firstname is required: David">
						<input class="input100" type="text" name="fname" placeholder="Firstname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Lastname is required: Sarpong">
						<input class="input100" type="text" name="lname" placeholder="Lastname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="phone" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Mobile Money No. is required: 0244123456">
						<input class="input100" type="text" name="phone" placeholder="Mobile Money No.">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Sign Up
						</button>
						<div class="text-center p-t-136">
						<a class="txt2" id="login">
							Existing Account? Log In
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>


	
	

	
<!--===============================================================================================-->	
	<script src="login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login_v1/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login_v1/js/main.js"></script>

</body>
</html>