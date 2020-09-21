<html>
	<head>
		<title>Criminal Investigation</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script> -->
	</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Criminal Investigation</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>criminal">Criminals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>polices">Police</a>
          </li>
        </ul>

        <ul class="navbar-nav my-2 my-lg-0">
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a></li>
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>criminal/create">Add Criminal</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a></li> -->
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>

    <div class="jumbotron">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('criminal_added')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('criminal_added').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('criminal_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('criminal_deleted').'</p>'; ?>
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

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif; ?>