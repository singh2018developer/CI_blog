<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CI Blog</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url();  ?>">Blog project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
      </li>
      
      
    </ul>
    <ul class="nav navbar-nav">
   
        <?php if(!$this->session->userdata('logged_in')): ?>
         <li><a class="nav-link" href="<?php echo base_url();?>users/register">Register</a></li>
                  <li><a class="nav-link" href="<?php echo base_url();?>users/login">Login</a></li>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in')): ?>
                   <li><a class="nav-link" href="<?php echo base_url();?>posts/create">Create Blog Post</a></li>
                  <li><a class="nav-link" href="<?php echo base_url();?>categories/create">Create Category</a></li>
                   <li><a class="nav-link" href="<?php echo base_url();?>users/logout">LogOut</a></li>
                            <?php endif; ?>
    </ul>
  </div>
</nav>
	
<div class="container">
  <!-- Flash message-->
  <br>
  <?php if($this->session->flashdata('user_registered')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('post_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('post_updated')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('category_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('post_deleted')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>


    <?php if($this->session->flashdata('user_logout')): ?>
    <?php echo '<p class="alert alert-warning">'.$this->session->flashdata('user_logout').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('category_deleted')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('category_deleted').'</p>'; ?>
    <?php endif; ?>