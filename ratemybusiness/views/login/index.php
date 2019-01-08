
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	
	<title>Rate My Business</title>
	<link rel="stylesheet" href="http://localhost/ratemybusiness/assets/bootstrap-4.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://localhost/ratemybusiness/assets/css/theme.css" />
</head>
<body class="alt">
	<header class="alt">
		<div class = "container">
			<div class="row">
				<div class="col-sm-10 col-md-6 col-lg-6 offset-sm-1 offset-md-3 offset-lg-3 ">
					<div class="logo">
						<a href="http://localhost/ratemybusiness/">
						<img src = "http://localhost/ratemybusiness/assets/images/rate-my-business.png" width=300 alt="rate my business">
						</a>					
						<p class="alternative-font-style text-center ">Customer Review Management System</p>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class='alt'>
		<div class="container">
			<div class="row">
					<div class="col-sm-10 col-md-6 col-lg-6 offset-sm-1 offset-md-3 offset-lg-3 box-type">
					<div class="error"><p><?php (isset($err_msg) ? print $err_msg : "");  ?></p></div>
					<?php echo form_open('login'); ?>

						<input type="email" name="email" placeholder="Email" />
						<div class ="error-msg"><?php echo form_error('email'); ?></div>

						<input type="password" name="password" placeholder="Password" />
						<div class ="error-msg"><?php echo form_error('password'); ?></div>
						
						<div class ="row">
							<div class="col-6 ">
								<div class="custom-checkbox">
									<label class="check">Remember me?</label>
									<input type="checkbox" id="remember">
								</div>
							</div>
							<div class="col-6 ">
								<input type="submit" name="submit" value="Login" />
								<button type="button" onclick="location.href='https://www.facebook.com'" name="signup" >Signup</button>
							</div>
						</div>
					</form>
				</div>
		</div>
		</div>
	</section>
	<footer  class="alt">
		<div class = "container">
				<div class="row">
					<div class="col-sm-10 col-md-6 col-lg-6 offset-sm-1 offset-md-3 offset-lg-3 box-type">
						<p class="copyright text-center">Page rendered in <strong>0.0315</strong> seconds. CodeIgniter Version <strong>3.1.9</strong></p>
					</div>
				</div>
		</div>
		<script src="http://localhost/ratemybusiness/assets/js/jquery-3.3.1.min.js"></script>
		<script src="http://localhost/ratemybusiness/assets/bootstrap-4.1.3/js/bootstrap.min.js"></script>
	</footer>
</body>
</html>		