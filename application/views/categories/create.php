<h2><?= $title;?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" class="form-control" placeholder="category name">
	
</div>	
<button type="submit" class="btn btn-success">Submit</button>
</form>