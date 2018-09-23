<h2><?php echo $title; ?></h2>

<div class="container">
  <div class="row">
    <div class="col-3">
    </div>
    <div class="col-6">
		<?php echo form_open('register'); ?>

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

			<label for="title">Password</label>
			<input type="password" name="password" />
			<div class ="error-msg"><?php echo form_error('password'); ?></div>

			<label for="title">Company</label>
			<input type="input" name="company" />
			<div class ="error-msg"><?php echo form_error('company'); ?></div>

			<label for="title">Year Established</label>
			<input type="input" name="year" />
			<div class ="error-msg"><?php echo form_error('year'); ?></div>

			<input type="submit" name="submit" value="Sign Up Now!" />

		</form>
    </div>
    <div class="col-3">
    </div>
  </div>
</div>

