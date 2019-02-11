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
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>assets/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo base_url(); ?>assets/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<script src="<?php echo base_url()."assets/js/jquery-3.3.1.min.js"; ?>"></script>

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
			<?php				
				
				if(!isset($_SESSION['logged_in'])){
					echo '	<li class="menu-item"><a href="'.base_url().'login">Login</a></li>';
				}else{
					echo '	<li class="menu-item"><a href="'.site_url('logout').'logout">Logout</a></li>';					
				}
			?>
		</ul>
				</div>
			</div>
		</div>
	</nav>
