<?php echo form_open('police/login'); ?>
	<div class="row justify-content-center">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" autocomplete="off" name="name" class="form-control" placeholder="Enter name" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" autocomplete="off" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" autocomplete="off" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>