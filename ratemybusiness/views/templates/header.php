<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	
	<title>Rate My Business</title>
	<link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap-4.1.3/css/bootstrap.min.css"; ?>" />
	<link rel="stylesheet" href="<?php echo base_url()."assets/css/theme.css"; ?>" />
</head>
<body>
	<header>
		<div class = "container">
			<div class="row">
				<div class="col-6">
					<div class="logo">
						<a href="<?php echo base_url(); ?>">
						<img src = "<?php echo base_url()."assets/images/rate-my-business.png"; ?>" width=300 alt="rate my business">
						</a>					
					</div>
				</div>
				<div class="col-6">
					test
				</div>
			</div>
		</div>
	</header>
	<nav>
		<div class = "container">
			<div class="row">
				<div class="col-12">
		<ul class="main-navigation">
			<li class="menu-item"><a href="<?php echo base_url();?>">Home</a></li>
			<li class="menu-item"><a href="<?php echo base_url().'about'; ?>">About</a></li>	
			<li class="menu-item"><a href="<?php echo base_url().'logout'; ?>">logout</a></li>	
		</ul>
				</div>
			</div>
		</div>
	</nav>
