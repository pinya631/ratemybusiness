<section>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="row">
				  <div class="col-md-6">
					<img id="img-<?php echo $company['company_id']; ?>" class="company-logo" alt="company logo" src ="<?php echo base_url()."uploads/company-img.png"; ?>">
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-12">
					<?php
					echo '<h2>'.$company['company_name'].'</h2>';
					echo $company['company_year_established']; 
					?>
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-12">
					<p class = "business-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis ultricies tincidunt. Phasellus nisl orci, malesuada eget est sit amet, commodo volutpat sapien. Ut a ex eu lacus congue luctus ac ut lorem. Proin ornare purus et orci vestibulum, quis facilisis justo tristique. Vivamus eu turpis nec felis tincidunt dapibus eu et dui. Duis gravida quam dui, sit amet sollicitudin ex facilisis quis. Proin consequat neque vitae iaculis varius. Integer ultricies magna in dolor sodales mollis. Donec tristique est sed metus rhoncus, a placerat augue vehicula. Donec ante dui, rhoncus quis lacus nec, tempor porta lacus. Nulla mollis laoreet consectetur. Etiam fringilla maximus mauris ac pharetra.</p>
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-12">
				  
					<?php if(!empty($reviews)){ 
						echo "<h5>Here's what their clients has to say... </h5>";
					}else{
						echo "<h5>No reviews yet!</h5>";
					}
					?>
						<?php foreach ($reviews as $rev): ?>
						<h5 class="reviewer"><?php echo $rev['reviewer_firstname']." ".$rev['reviewer_lastname']; ?></h5>
						<h5 class="ratings"><?php echo $rev['review_rating']; ?></h5>
						<p class="comment"><?php echo $rev['review_comment']; ?></p>
						<?php endforeach; ?> 

				  </div>
				</div>
			</div>
			<div class="col-md-5">
				<h2>Review this business</h2>
				<?php echo form_open('',array('class'=>'review-form')); ?>

					<label for="title">Email</label>
					<input type="email" name="email" />
					<div class ="error-msg"><?php echo form_error('email'); ?></div>
						<div class="row">
						  <div class="col-md-6">
										<label for="title">First Name</label>
										<input type="input" name="firstname" />
										<div class ="error-msg"><?php echo form_error('firstname'); ?></div>
						  </div>
						  <div class="col-md-6">
										<label for="title">Last Name</label>
										<input type="input" name="lastname" />
										<div class ="error-msg"><?php echo form_error('lastname'); ?></div>
						  </div>
						</div>

					<label for="title">Rating</label>
						<div class="row">
							<div class="col-md-12">
								<input type="radio" name="rating" value="1"> 
								<label for="title" class="radio-labels">Needs Improvement</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="radio" name="rating" value="2"> 
								<label for="title" class="radio-labels">Poor</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="radio" name="rating" value="3"> 
								<label for="title" class="radio-labels">Average</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="radio" name="rating" value="4"> 
								<label for="title" class="radio-labels">Good</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="radio" name="rating" value="5"> 
								<label for="title" class="radio-labels">Awesome</label>
							</div>
						</div>
					<div class ="error-msg"><?php echo form_error('rating'); ?></div>

					<label for="title">Comments</label>
					<textarea name="comment" rows="4" id="comment"></textarea>
					<div class ="error-msg"><?php echo form_error('comment'); ?></div>
					<input type="hidden" name="company_id" value="<?php echo $company['company_id']; ?>" />
					<input type="submit" name="submit" value="Sign Up Now!" />

				</form>
			</div>
	</div>
	</div>
</section>
<script>/*
    $(document).ready(function(){
        $('form.review-form').on('submit', function(form){
            //form.preventDefault();
            $.post('http://localhost/ratemybusiness/company/submission', $('form.review-form').serialize(), function(data){
                console.log(data);
				//$('div.jsError').html(data);
            });
        });
    });*/
</script>

