<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>Username</th>
    <th>Role</th>
    <th>Action</th>
  </tr>
 <?php 
 if ($listUser->num_rows > 0) {
 	while($row = $listUser->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['username']?></td>
      <td><?php echo $row['role']?></td>
      <td><a href="">Edit</a> | <a href="#">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="4">Khong co user nao</td>
  </tr>
  <?php }?>
</table>