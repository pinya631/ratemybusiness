
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
<body>
	<header>
		<div class = "container">
			<div class="row">
				<div class="col-6">
					<div class="logo">
						<a href="http://localhost/ratemybusiness/">
						<img src = "http://localhost/ratemybusiness/assets/images/rate-my-business.png" width=200 alt="rate my business">
						</a>					
					</div>
				</div>
				<div class="col-6">
					test
				</div>
			</div>
		</div>
	</header>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<h2>Login</h2>
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
	<footer>
		<div class = "container">
				<div class="row">
					<div class="col-12">
						<p class="copyright">Page rendered in <strong>0.0315</strong> seconds. CodeIgniter Version <strong>3.1.9</strong></p>
					</div>
				</div>
		</div>
		<script src="http://localhost/ratemybusiness/assets/js/jquery-3.3.1.min.js"></script>
		<script src="http://localhost/ratemybusiness/assets/bootstrap-4.1.3/js/bootstrap.min.js"></script>
	</footer>
</body>
</html>		