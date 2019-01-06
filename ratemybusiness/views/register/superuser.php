<h2><?php echo $title; ?></h2>

<div class="container">
  <div class="row">
    <div class="col-3">
    </div>
    <div class="col-6">
		<?php echo form_open('register/superuser'); ?>

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

			<input type="hidden" name="is_admin" value=1 />
			<input type="submit" name="submit" value="Sign Up Now!" />

		</form>
    </div>
    <div class="col-3">
    </div>
  </div>
</div>

