<?php 
	include 'config/connectdb.php';
	class Model extends ConnectDB {

		public function getNews() {
			$news = 'Test news abc';
			return $news;
		}

		public function getNewsRelated() {
			$newsRelated = "Tin lien quan";
			return $newsRelated;
		}

		public function getHomePage(){
			$a = 5;
			$b = 7;
			return $a * $b;
		}

		public function getProductPage() {
			$sql = "SELECT * FROM products";
			$productList = mysqli_query($this->connect(), $sql);
			return $productList;
		}

		public function getProductDetail($id) {
			$productDetail = 'Chi tiet san pham '.$id;
			return $productDetail;
		}

		public function deleteProduct($id) {
			$sql = "DELETE FROM products WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		public function getNewsPage() {
			$sql = "SELECT * FROM news";
			$newsList = mysqli_query($this->connect(), $sql);
			return $newsList;
		}

		public function addNews($title, $description, $created, $image) {
			$sql = "INSERT INTO news(title, description, created, image) VALUES ('$title', '$description', '$created', '$image' )";
			return mysqli_query($this->connect(), $sql);
		}

		public function deleteNews($id) {
			$sql = "DELETE FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		
		public function editNews($title, $description) {
			$sql = "UPDATE news SET title = '$title', description = '$description' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>