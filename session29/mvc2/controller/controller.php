<?php 
	include 'model/model.php';
	include 'libs/function.php';
	class Controller {

		public function handleRequest() {
			$model = new Model();
			$functionCommon = new FunctionCommon();
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					// goi model get du lieu
					$home = $model->getHomePage();

					// goi view home
					include 'view/home/home.php';
					break;
				case 'news':
					// goi model xu ly du lieu
					$showNews = $model->getNews();
					$related = $model->getNewsRelated();
					$newsList = $model->getNewsPage();
					// goi view news
					include 'view/news/news.php';
					break;
				case 'products':
					// goi model xu ly du lieu
					$productList = $model->getProductPage();
					// goi view products
					include 'view/products/products.php';
					break;
				case 'product_detail':
					// lay id cua san pham chi tiet
					$id = $_GET['id'];
					// goi model xu ly du lieu
					$productDetail = $model->getProductDetail($id);
					// goi view products
					include 'view/products/product_detail.php';
					break;
				case 'contact':
					// goi view contact
					include 'view/contact/contact.php';
					break;
				case 'delete_product':
				   // lay id cua san pham can xoa
					$id = $_GET['id'];
					// goi model thuc hien xoa san pham
					if ($model->deleteProduct($id) === TRUE) {
						//header("Location: "index.php?action=products);
						$functionCommon->redirectPage('index.php?action=products');
					}
					// goi view contact
					include 'view/contact/contact.php';
					break;
					break;
				default:
					# code...
					break;
				case 'add_news':
					# code...
					// check xem da submit add news chua?
					if (isset($_POST['add_news_form'])) {
						$title = $_POST['title'];
						$description = $_POST['description'];
						$created = date('Y-m-d h:i:s');
						$image = 'default.jpg';
						if ($_FILES['image']['error'] == 0) {
            			$avatar = uniqid().'_'.$_FILES['image']['name'];
            			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
          				}
						// save vao database
						if ($model->addNews($title, $description, $created, $image) === TRUE) {
							$functionCommon->redirectPage('index.php?action=news');
						}
					}
					// goi view hien thi trang add news
					include 'view/news/add_news.php';
					break;
				case 'delete_news':
				   // lay id cua san pham can xoa
					$id = $_GET['id'];
					// goi model thuc hien xoa san pham
					if ($model->deleteNews($id) === TRUE) {
						//header("Location: "index.php?action=news);
						$functionCommon->redirectPage('index.php?action=news');
					}
					// goi view contact
					include 'view/contact/contact.php';
					break;
				case 'edit_news';
					$id = $_GET['id'];
						$editNews =$model->getNewsPage($id);
						// edit
						if (isset($_POST['edit_news_form'])) {
							$name = $_POST['title'];
						  $description = $_POST['description'];
						  $created = date('Y-m-d h:i:s');
						 // edit vao database
						if ($model->editNews($title, $description) === TRUE) {
							$functionCommon->redirectPage('index.php?action=news');
						}
						}
				include 'view/news/edit_news.php';
				break;
			}
		}

	}
?>