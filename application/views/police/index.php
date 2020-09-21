<h2><?= $title ?></h2>

	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
	  <th scope="col">Address</th>
      <th scope="col">Department</th>
      <th scope="col">Phone number</th>
    </tr>
  </thead>
  <tbody>
	<?php foreach($police as $p) : ?>
    <tr>
      <td><?php echo $p['name']; ?></td>
      <td><?php echo $p['age']; ?></td>
	  <td><?php echo $p['address']; ?></td>
      <td><?php echo $p['department']; ?></td>
      <td><?php echo $p['phone_number']; ?></td>
	</tr>
	<?php endforeach; ?>
  </tbody>
</table>

<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>


