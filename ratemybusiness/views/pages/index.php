
<section>
	<div class = "container" >
		<div class = "row">
			<div class = "col-12">
				<div class="jumbotron jumbotron-fluid">
					<div class = "container" >
				
					<h2><?php echo $title; ?></h2>	
					<p class="lead">This is a list of the companies waiting for review.</p>
					<hr class="my-4">
					</div>
				</div>				
			</div>
			<div class = "col-12">
				<?php foreach ($companies as $company): ?>
				
				<div class ="company-profile">
					<img id="img-<?php echo $company['company_id']; ?>" class="company-logo" alt="company logo" src ="<?php echo base_url()."uploads/company-img.png"; ?>">
					<div class="score-section">
						<img class="ratings-star" src ="<?php echo base_url()."assets/images/star.png"; ?>" alt="star ratings">
						<h2 class="score">4.2</h2>
					</div>
					<h3 id="company-<?php echo $company['company_id']; ?>" class="company-name"><?php echo $company['company_name']; ?></h3>
					<h6 class="date-founded"> founded <?php echo $company['company_year_established']; ?></h6>				
					<p class="company-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus iaculis libero, suscipit porttitor nunc condimentum nec. Vivamus non odio in elit sodales posuere. Quisque id sodales massa. Nullam sed est quis mi pellentesque cursus. Morbi suscipit justo eu mi lacinia, ac condimentum nisi iaculis. Maecenas dictum ante in pellentesque euismod. Vivamus pharetra, </p>
					<p>
						<a class="rate-btn" href="<?php echo site_url('company/'.$company['company_id']); ?>">Rate it 				
							<img src ="<?php echo base_url()."assets/images/review-icon.png"; ?>" alt="review-icon">
						</a>
					</p>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

