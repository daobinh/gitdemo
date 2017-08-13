<?php 
	include_once('Model.php'); // gọi file connection để kết nối csdl

	class Post extends Model{
		public $table = "posts";

		public function __construct(){
			parent::__construct();
		}

		public function page(){
			$page = "SELECT COUNT(*) id  FROM posts";
			$result_page = $this->conn->query($page);
			return $data = $result_page->fetch_assoc();


		}
	}
?>