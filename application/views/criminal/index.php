<h2><?= $title ?></h2>
<?php foreach($criminal as $c) : ?>
	<h3><?php echo $c['name']; ?></h3>
	<div class="row">
		<div class="col-md-9">
			<small class="post-date">Posted on: <?php echo $c['register_date']; ?> in <strong><?php echo $c['age']; ?></strong></small><br>
		<?php echo word_limiter($c['crime'], 60); ?>
		<br><br>
		</div>
	</div>
<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>