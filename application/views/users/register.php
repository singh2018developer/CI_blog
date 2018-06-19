
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="card">
	<h2 class="text-center"><?= $title;?></h2>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" placeholder="full name">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="Email">
			</div>

			<div class="form-group">
				<label>User Name</label>
				<input type="text" name="username" class="form-control" placeholder="User name ">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Enter password" class="form-control">
			</div>

			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Re-enter Password">
			</div>

			<div class="form-group">
				<label>Zipcode</label>
				<input type="text" name="zipcode" class="form-control" placeholder="zipcode(optional)">
			</div>

			<button type="submit" class="btn btn-primary">Signup</button>
</div>
<?php echo form_close(); ?>