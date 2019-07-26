<h1>edit user</h1>
<form action="admin.php?controller=user&action=add_user" method="POST" enctype="multipart/form-data">
	<p>
		Username
		<input type="text" name="username" value="<?php echo $editUser['username'];?>">
	</p>
	<p>
		Password
		<input type="password" name="password" value="<?php echo $editUser['username'];?>">
	</p>
	<p>
		Avatar
		<input type="file" name="avatar" value="<?php echo $editUser['username'];?>">
	</p>
	<p>
		<input type="submit" name="add_user" value="edit user">
	</p>
</form>