<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	
	<title>Rate My Business</title>
	<link rel="stylesheet" href="http://ratemybusiness/assets/bootstrap-4.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://ratemybusiness/assets/css/theme.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
<body class="alt">
	<header class="alt">
		<div class = "container">
			<div class="row">
				<div class="col-sm-10 col-md-6 col-lg-6 offset-sm-1 offset-md-3 offset-lg-3 ">
					<div class="logo">
						<a href="<?php echo site_url(); ?>">
						<img src = "<?php echo site_url().'assets/images/rate-my-business.png'; ?>" width=300 alt="rate my business">
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

						<input type="email" name="email" placeholder="Email" /><i class="fas fa-envelope custom-login-icon"></i>
						<div class ="error-msg"><?php echo form_error('email'); ?></div>

						<input type="password" name="password" placeholder="Password" /><i class="fas fa-lock custom-login-icon"></i>
						<div class ="error-msg"><?php echo form_error('password'); ?></div>
						
						<div class ="row">
							<div class="col-6 ">
								<div class="custom-checkbox">
									<label class="check">Remember me?</label>
									<input type="checkbox" name="remember" id="remember">
								</div>
							</div>
							<div class="col-6 ">
								<input type="submit" name="submit" value="Login" />
								<button type="button" onclick="location.href='<?php echo site_url('register'); ?>'" name="signup" >Signup</button>
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
		<script src="http://ratemybusiness/assets/js/jquery-3.3.1.min.js"></script>
		<script src="http://ratemybusiness/assets/bootstrap-4.1.3/js/bootstrap.min.js"></script>
	</footer>
</body>
</html>		