<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Blog title">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea type="text" id="editor" rows="5" class="form-control" name="body" placeholder="main content"></textarea>
  </div>

  <div class="form-group">
    <label>Categories</label>
    <select name="category_id" class="form-control">
      <?php foreach ($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  
  <div class="form-group">
    <label>upload Image</label>
    <input type="file" class="form-control" name="userfile" size="20">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>