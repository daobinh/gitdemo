<?php 
	include_once('model/Post.php'); // Gọi file model/Post.php để lấy dữ liệu 
	include_once('model/User.php');
	include_once('model/Tags.php');


	class Pagination{
		private $post_model; // khởi tạo thuộc tính
		private $user_model;
		private $tag_model;

		public function __construct(){ // phương thức sẽ thực thi ngay khi có 1 đối tượng mới được tạo
			$this->post_model = new Post(); // khởi tạo class PostController trỏ đến model để lấy dữ liệu của class Post bên model
			$this->user_model = new User(); // lấy dữ liệu của user model
			$this->tag_model = new Tags();

		}

		function pagination(){
			$limit = 12;
			if ($row_page > $limit) {
				$total_pages = ceil($row_page['id'] / $limit); // tổng số page
			}
			else{
				$total_pages = 1;
			}

		// nêu tồn tại $_GET['page'] và kiểu int của $_GET['page'] >= 0 thì 
		// gán trang hiện tại bằng $_GET['page'] nếu không trả về trang hiện tại = 0


			if (isset($_GET['page']) && (int)$_GET['page'] >=0) {
				$current_page = $_GET['page']; // trang hiện tại
			}
			else{
				$current_page = 0;
			}

			// xét các trường hợp của trang hiện tại
			// nếu < 1 thì trả về trang hiện tại  = 1
			if ($current_page < 1) {
				$current_page = 1;
			}
			
			// nếu trang hiện tại  = tổng số trang trả về trang hiện tại bằng tông số trang
			if ($current_page > $total_pages) {
				$current_page = $total_pages;
			}
			// tính start
			$start = ($current_page - 1)*$limit; // vị trí dòng bắt đầu mỗi trang

			// thiết lập số trang
			$num_link = 2; 

			// trang bắt đầu và trang kết thúc
			if ($current_page > $num_link) {
				$start_page = $current_page -$num_link;
			}
			else{
				$start_page = 1;
			}
			if (($current_page+$num_link) < $total_pages) {
				$end_page = $current_page + $num_link;
			}
			else{
				$end_page = $total_pages;
			}


			include_once('client/view/list_blog.php');
		}
	}
?>