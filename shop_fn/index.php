<?php 
	session_start();
	include 'controller/frontend_controller.php';
?>
<?php include 'view/home/header/header.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
</head>
<body id="home">
      <div class="wrapper">
         <div class="header"> 
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.php"><img src="webroot/image/home/logo_zps36816f3e_large.png" alt="FlatShop" style="height:80px;"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="col-md-3" style="float: right;">
                              <ul class="usermenu">
                                 <li><a href="#" class="log">Login</a></li>
                                 <li><a href="#" class="log">Register</a></li>
                              </ul>
                     </div>
                           <div class="col-md-12" style="float:left" >
                                <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                                </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form style="width:ề lauấ00px; margin-left:-300px"><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart">
                              <a href="giohang.php" class="cart-icon">cart <span class="cart_no"></span></a>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown"><a href="index.php" >Home</a></li>
                              <li><a href="index.php?controller=product&action=list_product">Product</a></li>
                              <?php if(isset($_SESSION['login']['username'])){?>
				<li class="login_account">Hi, <?php echo $_SESSION['login']['username'];?><a href="index.php?controller=user&action=logout"> Logout</a></li>
				<li><a href="admin.php?controller=user&action=list_user">Manage</a></li>
			<?php }else {?>
				<li><a href="index.php?controller=user&action=login">Login</a></li>
				<li><a href="index.php?controller=user&action=register">Register</a></li>
			<?php }?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
	<?php 
		$front = new FrontendController();
		$front->handleRequest();
	?>
	<?php include 'view/home/footer/footer.php' ?>
</body>
</html>