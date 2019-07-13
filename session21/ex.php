<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai tap</title>
</head>
<body>
	<?php
		if(isset($_POST['register'])) {
			echo $_POST['name'];
			echo "<br>";
			echo $_POST['email'];
			echo "<br>";
			if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }  else {
        $gender = false;
    }
		}
	?>
	<h1>Đăng ký</h1>
	<form action="#" name="RegisterForm" method="POST">
		<p>Tên:
			<input type="text" name="name">
		</p>
		<p>Email:
			<input type="text" name="email">
		</p>
		<p>Số điện thoại:
			<input type="text" name="phone">
		</p>
		<p>Giới tính:
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
		</p>
		<p>Quê quán:
			<select>
  				<option value="danang">Đà Nẵng</option>
  				<option value="quangnam">Quãng Nam</option>
			</select>
		</p>
		<p>Ngày Sinh:
			<input type="date" name="bDay">
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>