<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id'];?>" />
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $post['title'];?>" placeholder="Blog title">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea type="text" id="editor" class="form-control" rows="5" name="body" placeholder="main content">
      <?php echo $post['body'];?>
    </textarea>
  </div>
  
  <div class="form-group">
    <label>Categories</label>
    <select name="category_id" class="form-control">
      <?php foreach ($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>