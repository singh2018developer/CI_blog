<?php echo form_open('users/login'); ?>
	
		<div class="card">
			<h3 class="text-center"><?php echo $title; ?></h3>
					<div class="form-group">
						<label>User Name</label>
						<input type="text" name="username" class="form-control" placeholder="username" required autofocus>
					</div>					

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="password" required autofocus>
					</div>


					<button class="btn btn-success" type="submit">Login</button>

		
	</div>


<?php echo form_close(); ?>