<?php include 'common/header.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <?php 
    	include 'connect.php';
      $errClassName = $errClassEmail = $errClassPhone = $errClassCity = $errClassBirthday = $errClassGender = $errClassGender = $errClassAvatar = '';
      $errTextName = $errTextEmail = $errTextPhone = $errTextCity = $errTextBirthday = $errTextGender = $errTextEGender = $errTextAvatar ='';
      $name = $emai = $phone = $city = $birthday = $gender = $avatar ='';
      if (isset($_POST['register'])) {
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $birthday = $_POST['birthday'];
        // chuyen dinh dang bithday sang Nam-thang-ngay
        $birthday = date("Y-m-d", strtotime($birthday));
        $gender = isset($_POST['gender'])?$_POST['gender']:NULL;
        $avatar = 'default.png';
        // avatar

        if ($name == '') {
          $errClassName = 'has-error';
          $errTextName = 'Please input your name';
        }
        if ($email == '') {
          $errClassEmail = 'has-error';
          $errTextEmail = 'Please input your email';
        }
        if ($phone == '') {
          $errClassPhone = 'has-error';
          $errTextPhone = 'Please input your phone';
        }
        if ($avatar == '') {
          $errClassAvatar = 'has-error';
          $errTextAvatar = 'Please input your avatar';
        }
        if ($city == '') {
          $errClassCity = 'has-error';
          $errTextCity = 'Please input your city';
        }
        if ($gender == '') {
          $errClassGender = 'has-error';
          $errTextGender = 'Please input your gender';
        }
        if ($date == '') {
          $errClassDate = 'has-error';
          $errTextDate = 'Please input your date';
        }
        if ($name != '' && $email != '' && $phone != '' && $avatar != '' && $gender != '' && $city != '' && $date != '') {
          //upload avatar
          if ($_FILES['avatar']['error'] == 0) {
            $avatar = uniqid().'_'.$_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/avatar/'.$avatar);
          }
          //
        	$sql = "INSERT INTO users(name, email, phone, gender, city, birthday, avatar) VALUES ('$name', '$email', '$phone', '$gender', '$city', '$birthday', '$avatar')";
        	if (mysqli_query($connect, $sql) === TRUE) {
        		// chuyen trang trong PHP
        		header("Location: list_user.php");
        	}
        }
      }
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Register form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group <?php echo $errClassName;?>">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" name="name" value="<?php echo $name;?>">
                  <span class="help-block"><?php echo $errTextName;?></span>
                </div>
                <div class="form-group <?php echo $errClassName;?>" >
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  <span class="help-block"><?php echo $errTextEmail;?></span>
                </div>
                <div class="form-group <?php echo $errClassPhone;?>">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" name="phone" class="form-control" id="exampleInputPhone" placeholder="Enter phone">
                   <span class="help-block"><?php echo $errTextPhone  ;?></span>
                </div>
                <div class="form-group <?php echo $errClassAvatar;?>">
                  <label for="exampleInputFile">Avatar</label>
                  <input type="file" name="avatar" id="exampleInputFile">
                  <span class="help-block"><?php echo $errTextAvatar;?></span>
                </div>
                <!-- radio -->
                <div class="form-group <?php echo $errClassGender;?>">
                  <label>
                    <input type="radio" name="gender" class="minimal" value="male">Male
                  </label>
                  <label>
                    <input type="radio" name="gender" class="minimal" value="female">Female
                  </label>
                  <label>
                    <input type="radio" name="gender" class="minimal" value="other">Other
                </div>
                <span class="help-block"><?php echo $errTextGender;?></span>
                 
              </div>
              <div class="form-group  <?php echo $errClassCity;?>">
                <label>City</label>
                <select class="form-control select2" style="width: 100%;" name="city">
                  <option value="">Choose city</option>
                  <option value="Alaska">Alaska</option>
                  <option value="California">California</option>
                  <option value="Delaware">Delaware</option>
                </select>
                <span class="help-block"><?php echo $errTextCity;?></span>
              </div>
              <div class="form-group <?php echo $errClassDate;?>">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="birthday" class="form-control pull-right" id="birthday">
                  <span class="help-block"><?php echo $errTextDate;?></span>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="register">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>