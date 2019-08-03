<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/favicon.png">
<title>Admin</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
<link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
<link href="css/style.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>
<body id="home">
<div class="wrapper">


   <style>
      table {
border-collapse: collapse;
}

table, th, td {
border: 1px solid black;
text-align: center;
}
img {
width: 200px;
}

  </style>
   <div class="clearfix"></div>


<body>
<section class="title" style=" background:#FF9900;height:90px">
<h2 style="padding-left: 30px; color:yellow; font-size: 26px; padding-top:30px;">Trang quản lý admin</h2>
<form method="post" style="  margin-top: -30px" >
<button class="glyphicon glyphicon-home" name="logout" style="background-color: #FFFF00;
 float: right;"><span style="padding-left:3px">Logout</span></button>
</form>
</section>
<section class="col-sm-3" style="background:#002200; height:800px;margin-top:-15px">
<p style="color:#00FF00; font-size:25px; padding-left:14px;padding-bottom:10px;padding-top:10px"><b>Phạm Văn Hùng</b></p>
<p style="color:#FF66CC; font-size:15px; padding-left:14px;padding-bottom:10px">Quản lý</p>
<ul class="sidebar-menu" class="col-sm-4" style="margin-left:10px">
  <li style=" height:50px"><a href="admin.php?controller=user&action=list_product" style="font-size:25px; color:Linen;"><span>Sản phẩm</span></a></li>
  <li style=" height:50px"><a href="admin.php?controller=user&action=list_user" style="font-size:25px; color:Linen;"><span>Nhân viên</span></a></li>
</ul>

</section>
<section class="col-sm-9">

    <a href="admin.php?controller=user&action=add_user"><div class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Thêm nhân viên</div></a>


    <div class="clearfix"></div>
    <table class="col-sm-12" style="margin-top: 30px; background-color: white; width:100%;">
      <tr>
                                <td  style="color:red; font-size: 16px;width: 5%; height:40px; text-align:center;padding-top:10px; ">STT</td>
                                <td  style="color:red; font-size: 16px;width: 10%">User name</td>
                                <td style="color:red;font-size: 16px;width: 10%">Avatar</td>
                                <td style="color:red;font-size: 16px;width: 12%">Hành động</td>

                        </tr>
                     <?php 
                      if ($listUser->num_rows > 0) {
                      while($row = $listUser->fetch_assoc()) {
                      $id = $row['id'];
                      ?>
                        <tr>
                                <td style="color:#020202;padding-top:-200px"><?php echo $row['id']?></td>
                                <td style="color:#020202;"><?php echo $row['username']?></td>

                                <td style="color:#020202;"><img src="webroot/uploads/<?php echo $row['avatar']?>" alt="image" class="avatar_user"></td>
              
                                <td><a href="admin.php?controller=user&action=edit_user&id=<?php echo $id ?>">Edit</a> | <a href="admin.php?controller=user&action=delete_user&id=<?php echo $id; ?>">Delete</a></td>
      </tr>

                          <?php 
    }
  } else {?>
  <tr>
    <td colspan="4">Khong co user nao</td>
  </tr>
  <?php }?>
                        </table>

</section>
</body>
</html>