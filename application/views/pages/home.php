<!-- <h2><?= $title ?></h2> -->

<figure class="figure">
  <img src="<?php echo site_url(); ?>assets/images/home/badge.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
  <figcaption class="figure-caption"></figcaption>
</figure>

<h3>Welcome to the Criminal Management application</h3>
<p>Criminal record management system that uses to record crime activities of criminals. 
    It can be used to report crime activities. 
    This project is mainly useful for law and enforcement agencies. 
    The law and enforcement authority can preserve records of the criminals and search any criminal using the system.
</p>

<div class="card-group">
    <div class="card border-primary mb-3" style="max-width: 20rem;">
    <div class="card-header">Police Management</div>
    <div class="card-body">
        <h4 class="card-title">Manage Police Department</h4>
        <p class="card-text">Keep track of working staff in department</p>
    </div>
    </div>

    <div class="card border-primary mb-3" style="max-width: 20rem;">
    <div class="card-header">Criminal Management</div>
    <div class="card-body">
        <h4 class="card-title">Criminal Record Management</h4>
        <p class="card-text">Maintain records of criminal with necessary information</p>
    </div>
    </div>

    <div class="card border-primary mb-3" style="max-width: 20rem;">
    <div class="card-header">Searching made easy</div>
    <div class="card-body">
        <h4 class="card-title">Search Record</h4>
        <p class="card-text">Query among data to get police, criminal</p>
    </div>
    </div>

</div>

<div class="jumbotron">
  <h1 class="display-3">Want to see this in effect?</h1>
  <p class="lead">Register and manage records efficiently!!</p>
  <hr class="my-4">
  <p class="lead">
    <?php if(!$this->session->userdata('logged_in')) : ?>
        <a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>police/register" role="button">Register</a>
        <a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>police/login" role="button">Login</a>
    <?php endif; ?>
    <?php if($this->session->userdata('logged_in')) : ?>
        <a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>criminal/create" role="button">Add Criminal</a>
    <?php endif; ?>
  </p>
</div>