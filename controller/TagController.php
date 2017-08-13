<?php 
	include_once('model/Tags.php'); // Gọi file model/Tags.php để lấy dữ liệu 

	class TagController{ // xử lý dữ liệu được lấy từ model/Tags.php
		private $model; // khởi tạo thuộc tính

		public function __construct(){ // phương thức sẽ thực thi ngay khi có 1 đối tượng mới được tạo
			$this->model = new Tags(); // khởi tạo class TagsController trỏ đến model để lấy dữ liệu của class Tags bên model
		}

		public function index(){  // xử lý dữ liệu và đổ lên table trong list
			$data = $this->model->All(); // lấy dữ liệu từ cơ sở dữ liệu được lấy từ phương thức ALL

			include_once('view/tags/list_tags.php'); //  gọi file list_tags.php trong view để đổ dữ liệu lấy được lên
		}
		public function show($id){ // xử lý và đổ dữ liệu lên theo id
			$data = $this->model->find($id); // lấy dữ liệu từ cơ sở dữ liệu được lấy từ phương thức Postfind

			include_once('view/tags/detail_tags.php'); //  gọi file detail_post.php trong view để đổ dữ liệu lấy được lên
		}

		public function create(){ 
			$users = $this->user_model->All(); // thực hiện phương thức All bên user model
			include_once('view/tags/create_tags.php');
		}
	}
?>