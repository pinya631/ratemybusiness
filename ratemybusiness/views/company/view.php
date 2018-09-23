<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php
				echo '<h2>'.$company['company_name'].'</h2>';
				echo $company['company_year_established']; 
				?>
			</div>
	</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php echo form_open(''); ?>

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

					<input type="submit" name="submit" value="Sign Up Now!" />

				</form>
			</div>
	</div>
	</div>
</section>


