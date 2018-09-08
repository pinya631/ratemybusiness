	<footer>
		<div class = "container">
				<div class="row">
					<div class="col-12">
						<p class="copyright">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
					</div>
				</div>
		</div>
		<script src="<?php echo base_url()."assets/js/jquery-3.3.1.min.js"; ?>"></script>
		<script src="<?php echo base_url()."assets/bootstrap-4.1.3/js/bootstrap.min.js"; ?>"></script>
	</footer>
</body>
</html>		