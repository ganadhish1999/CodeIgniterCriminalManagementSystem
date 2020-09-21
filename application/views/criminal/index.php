<h2><?= $title ?></h2>

	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
	  <th scope="col">Crime</th>
	  <th scope="col">Date of addition</th>
    </tr>
  </thead>
  <tbody>
	<?php foreach($criminal as $c) : ?>
    <tr>
      <td><?php echo $c['name']; ?></td>
      <td><?php echo $c['age']; ?></td>
	  <td><?php echo $c['crime']; ?></td>
    <td><?php echo $c['register_date']; ?></td>
    <td>
      <?php if($this->session->userdata('user_id') == $c['police_id']): ?>
        <?php echo form_open('/criminal/delete/'.$c['id']); ?>
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      <?php endif; ?>
    </td>
	</tr>
	<?php endforeach; ?>
  </tbody>
</table>
