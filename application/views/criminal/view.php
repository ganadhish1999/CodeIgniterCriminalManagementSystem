<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $criminal['register_date']; ?></small><br>

<?php if($this->session->userdata('user_id') == $criminal['police_id']): ?>
	<hr>
	<!-- <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>criminal	/edit/<?php echo $post['slug']; ?>">Edit</a> -->
	<?php echo form_open('/criminal/delete/'.$post['id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
<?php endif; ?>
<hr>