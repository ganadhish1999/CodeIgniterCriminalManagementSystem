<?php echo validation_errors(); ?>

<?php echo form_open('police/register'); ?>
	<div class="row justify-content-center">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<label>Name</label>
				<input type="text" autocomplete="off" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="form-group">
				<label>Age</label>
				<input type="number" autocomplete="off" min="18" class="form-control" name="age" placeholder="Age">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" autocomplete="off" class="form-control" name="address" placeholder="Address">
			</div>
			<div class="form-group">
				<label>Department</label>
				<input type="text" autocomplete="off" class="form-control" name="department" placeholder="Department">
			</div>
			<div class="form-group">
				<label>Mobile Number</label>
				<input type="tel" autocomplete="off" class="form-control" name="phone_number" placeholder="xxxx-xxx-xxx">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" autocomplete="off" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" autocomplete="off" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" autocomplete="off" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>
