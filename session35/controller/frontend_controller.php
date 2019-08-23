<?php 
	include 'model/frontend_model.php';
	class FrontendController {
		function handleRequest() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($controller) {
				case 'home':
					$this->handeHome($action);
					break;
				case 'user':
					$this->handleUser($action);
					break;
				case 'product':
					$this->handleProduct($action);
					break;
				case 'comment':
					$this->handleComment($action);
					break;
				default:
					# code...
					break;
			}
		}
		function handeHome($action) {

		}
		function handleUser($action) {
				switch ($action) {
					case 'register':
						if (isset($_POST['register'])) {
							$role = $_POST['role'];
							$username = $_POST['username'];
							$password = md5($_POST['password']);
							$name = $_POST['name'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$birthday = date('Y-m-d', strtotime($_POST['birthday']));
							$avatar = 'default.png';
							$pathUpload = 'webroot/uploads/users/';
							if ($_FILES['avatar']['error'] == 0) {
								move_uploaded_file($_FILES['avatar']['tmp_name'], $pathUpload.$_FILES['avatar']['name']);
								$avatar = $_FILES['avatar']['name'];
							}
							// save vao database
							$model = new FrontendModel();
							$errorExistUser = '';
							$checkExistUser = $model->checkExistUser($username, $email);
							// check exist username or email
							if ($checkExistUser->num_rows == 0) {
								if ($model->register($role, $username, $password, $name, $email, $phone, $birthday, $avatar) === TRUE) {
									// Dang nhap luon, sau khi dang ky thanh cong
									$login['username'] = $username;
									$login['role'] = $role;
									$_SESSION['login'] = $login;
									header("Location: index.php");
								}
							} else {
								$errorExistUser = 'Exist email or username';
							}

						}
						include 'view/users/register.php';
						break;
					case 'login':
						if (isset($_POST['login'])) {
							$username = $_POST['username'];
							$password = md5($_POST['password']);
							$model = new FrontendModel();
							$checkogin = $model->login($username, $password);
							if ($checkogin->num_rows > 0) {
								$checkogin = $checkogin->fetch_assoc();
								$login['username'] = $username;
								$login['role'] = $checkogin['role'];
								$_SESSION['login'] = $login;
								header("Location: index.php");
							}
						}
						include 'view/users/login.php';
						# code...
						break;
					case 'logout':
						unset($_SESSION['login']);
						header("Location: index.php");
					default:
						# code...
						break;
				}
		}
		function handleProduct($action) {
			switch ($action) {
				case 'list_product':
					# code...
					$model = new FrontendModel();
					$listProduct = $model->getListProduct();
					include 'view/products/list_product_frontend.php';
				case 'product_detail':
						# code...
					$id = $_GET['id'];
					$model = new FrontendModel();
					$productDetail = $model->getProductDetail($id);
					$productDetail = $productDetail->fetch_assoc();
					include 'view/products/product_detail_frontend.php';
					break;	
				default:
					# code...
					break;
			}
		}

		function handleComment($action) {
			switch ($action) {
				case 'comment':
					if (isset($_POST['comment'])) {
						$content = $_POST['content'];
						//save comment vao database
						// goi model
						$productId = $_POST['product_id'];
						$users = $frontModel->getUserID($_SESSION['login']['username']);
						$userId = $users->fetch_assoc();
						$userId = $userId['id'];
						if ($frontModel->addComment($productId, $userId, $content) === TRUE) {
							$libs->redirectPage("index.php?controller=products&action=product_detail_frontend&id=$productId");
						} else {
							$libs->redirectPage("index.php?controller=users&action=login");
						}
					}
					break;
				
				default:
					# code...
					break;
			}
		}
	}
?>