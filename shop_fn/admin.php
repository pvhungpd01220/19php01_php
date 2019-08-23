<?php 
	session_start(); 
	include 'controller/backend_controller.php';
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
                              <a href="" class="cart-icon">cart <span class="cart_no"></span></a>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                        	<p>Hi <?php echo $_SESSION['login']['username'];?>
	<a href="index.php?controller=user&action=logout">Logout</a></p>
                           <ul class="nav navbar-nav">
                              <nav>
		<ul>
			<li><a href="admin.php?controller=dashboard&action=home">Dashboard</a></li>
			<li><a href="">News</a></li>
			<li><a href="admin.php?controller=product&action=list_product">Products</a></li>
		  <li><a href="admin.php?controller=user&action=list_user">Users</a></li>
		</ul>
	</nav>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
	<?php 
		if (isset($_SESSION['login'])) {
			$backend = new BackendController();
			$backend->handleRequest();
		} else {
			header('Location: index.php');
		}
	?>
	<?php include 'view/home/footer/footer.php' ?>
</body>
</html>