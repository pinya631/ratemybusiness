
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
				<div class="col-md-4 offset-md-4 box-type">
					<div class="logo">
						<a href="http://localhost/ratemybusiness/">
						<img src = "http://localhost/ratemybusiness/assets/images/rate-my-business.png" width=300 alt="rate my business">
						</a>					
					</div>
				</div>
			</div>
		</div>
	</header>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 box-type">
				<div class="error"><p><?php (isset($err_msg) ? print $err_msg : "");  ?></p></div>
				<?php echo form_open('login'); ?>

					<label for="title">Email</label>
					<input type="email" name="email" />
					<div class ="error-msg"><?php echo form_error('email'); ?></div>

					<label for="title">Password</label>
					<input type="password" name="password" />
					<div class ="error-msg"><?php echo form_error('password'); ?></div>

					<input type="submit" name="submit" value="Login" />

				</form>
			</div>
	</div>
	</div>
</section>
	<footer  class="alt">
		<div class = "container">
				<div class="row">
					<div class="col-md-4 offset-md-4 box-type">
						<p class="copyright">Page rendered in <strong>0.0315</strong> seconds. CodeIgniter Version <strong>3.1.9</strong></p>
					</div>
				</div>
		</div>
		<script src="http://localhost/ratemybusiness/assets/js/jquery-3.3.1.min.js"></script>
		<script src="http://localhost/ratemybusiness/assets/bootstrap-4.1.3/js/bootstrap.min.js"></script>
	</footer>
</body>
</html>		