<h2><?=$title ?></h2>
<?php if($criminal != null): ?>
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
            <tr>
                <td><?php echo $criminal['name']; ?></td>
                <td><?php echo $criminal['age']; ?></td>
                <td><?php echo $criminal['crime']; ?></td>
                <td><?php echo $criminal['register_date']; ?></td>
            <td>
        <?php if($this->session->userdata('user_id') == $criminal['police_id']): ?>
            <?php echo form_open('/criminal/delete/'.$criminal['id']); ?>
                <input type="submit" value="Delete" class="btn btn-danger">
                </form>
        <?php endif; ?>
                </td>
            </tr>
        </tbody>  
    </table>
    <?php else: ?>
        <h5>no match</h5>
  <?php endif; ?>
  

