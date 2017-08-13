<?php 
	include_once('model/Post.php'); // Gọi file model/Post.php để lấy dữ liệu 
	include_once('model/User.php');
	include_once('model/Tags.php');

	class PostController{ // xử lý dữ liệu được lấy từ model/Post.php
		private $model; // khởi tạo thuộc tính
		private $user_model;
		private $tag_model;

		public function __construct(){ // phương thức sẽ thực thi ngay khi có 1 đối tượng mới được tạo
			$this->model = new Post(); // khởi tạo class PostController trỏ đến model để lấy dữ liệu của class Post bên model
			$this->user_model = new User(); // lấy dữ liệu của user model
			$this->tag_model = new Tags();

		}

		public function index(){ // xử lý dữ liệu và đổ lên table trong list
			$data = $this->model->All(); // lấy dữ liệu từ cơ sở dữ liệu được lấy từ phương thức PostAll

			include_once('view/post/list_post.php'); //  gọi file list_post.php trong view để đổ dữ liệu lấy được lên
		}

		public function show($id){ // xử lý và đổ dữ liệu lên theo id
			$data = $this->model->find($id); // lấy dữ liệu từ cơ sở dữ liệu được lấy từ phương thức Postfind

			include_once('view/post/detail_post.php'); //  gọi file detail_post.php trong view để đổ dữ liệu lấy được lên
		}

		public function create(){ 
			$id = $_GET['id'];
			$users = $this->user_model->find($id); // thực hiện phương thức All bên user model
			include_once('view/post/create_post.php');
		}

		public function store(){ 
			
			// $data['user_id'] = $_POST['user_id'];
			$data['title'] = $_POST['title'];
			$data['description'] = $_POST['description'];
			$data['content'] = $_POST['content'];

			if ($_FILES['image']['error'] > 0) {
				
			}
			else{
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$_FILES['image']['name']);
			}
			$data['image'] = "upload/".$_FILES['image']['name'];
			$this->model->create($data); // truyền dữ liệu và thực hiện phương thức create
			header('Location:index.php?mod=post');

		}
		public function edit(){
			$id = $_GET['id'];
			$data = $this->model->find($id); // thực hiện phương thức find bên post model với id truyền sang

			$user_id = $data['user_id'];
			$users = $this->user_model->find($user_id);  // thực hiện phương thức find bên user model với id truyền sang
			
			include_once('view/post/edit.php');
		}

		public function update(){
			// khai báo mảng data 
			$data['id'] = $_POST['id'];
			$data['title'] = $_POST['title'];
			$data['description'] = $_POST['description'];
			$data['content'] = $_POST['content'];
			$data['updated_at'] = $_POST['updated_at'];

			if ($_FILES['image']['error'] > 0) {
				
			}
			else{
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$_FILES['image']['name']);
			}
			$data['image'] = "upload/".$_FILES['image']['name'];

			$this->model->update($data);  // truyền dữ liệu và thực hiện phương thức update

			header('Location:index.php?mod=post');
		}

		public function delete(){
			$id = $_GET['id'];
			$this->model->delete($id);
			header('Location:index.php?mod=post');
		}

		public function blog_id(){
			// $data = $this->model->All();
			$limit = 8;
			
			
			$row_page = $this->model->page();

			if ($row_page > $limit) {
				$total_pages = ceil($row_page['id'] / $limit); // tổng số page
			}
			else{
				$total_pages = 1;
			}

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
			// 
			$start = ($current_page - 1)*$limit; 

			$data =  $this->model->pagination($start,$limit);

		// nêu tồn tại $_GET['page'] và kiểu int của $_GET['page'] >= 0 thì 
		// gán trang hiện tại bằng $_GET['page'] nếu không trả về trang hiện tại = 0


			// vị trí dòng bắt đầu mỗi trang

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

		public function view_post(){
			$id = $_GET['id'];
			$data = $this->model->find($id);

			$user_id = $data['user_id'];
			$user = $this->user_model->find($user_id);
			
			$post_id = $data['id'];
			$tag = $this->tag_model->find($post_id);

			$tags = $this->tag_model->All();

			include_once('client/view/view_post.php');
		}

	}
?>