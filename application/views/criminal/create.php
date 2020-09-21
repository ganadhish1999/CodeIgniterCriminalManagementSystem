<?php echo validation_errors(); ?>

<?php echo form_open_multipart('criminal/create'); ?>
  <div class="row justify-content-center">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="form-group">
				<label>Crime</label>
				<input type="text" class="form-control" name="crime" placeholder="Crime">
			</div>
			<div class="form-group">
				<label>Age</label>
				<input type="number" class="form-control" name="age" placeholder="Age">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>
</form>