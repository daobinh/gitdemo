<?php 
	session_start();
	if (!isset($_SESSION['login'])) {
		header('Location: login.php');
	}

?>
<?php 
	ob_start();
	include_once('view/header.php');
?>
<?php 
	// echo $_SESSION['permission'];

	$mol = isset($_GET['mod'])?$_GET['mod']:'user'; // điều hướng trên trang chủ để để trả về table user, post, tags
	switch ($mol) {
		case 'user': // trả về table user
			include_once ('controller/UserController.php');

			$users = new UserController();

			$act = isset($_GET['act'])?$_GET['act']:'index';

			switch ($act) {
				case 'index':
					$users->index();
					break;
				case 'show':
					$id = $_GET['id'];
					$users->show($id);
					break;
				case 'create':
					$users->create();
					break;
				case 'store':
					$users->store();
					break;
				case 'edit':
					$id = $_GET['id'];
					$users->edit($id);
					break;
				case 'update':
					$users->update();
					break;
				case 'delete':
					$id = $_GET['id'];
					$users->delete($id);
					break;
				case 'login':
					$users->login();
					break;
				case 'logout':
					$users->logout();
					break;
				default:
					break;
			}
			break;
		case 'post': // trả về table post
			include_once ('controller/PostController.php');// gọi file controller/PostController.php để lấy dữ liệu

			//khởi tạo biến để lấy dữ liệu của class
			$post = new PostController();

			// khởi tạo biến truyền lên bằng phuong thức get để xet thực thi table
			$act_post = isset($_GET['act_post'])?$_GET['act_post']:'index'; // xet nếu tồn $_GET['act_post'] thì trả về $_GET['act_post'] nếu không thì trả về act_post = index

			switch ($act_post) {
				case 'index': // act_post = index thì sẽ thực hiện phương thức index của class PostController
					$post->index();
					break;
				case 'show': // act_post = show thì sẽ thực hiện phương thức show của class PostController
					$id = $_GET['id'];
					$post->show($id);
					break;
				case 'create': // act_post = create trả về form create
					$post->create();
					break;
				case 'store': // act_post = store thì sẽ thực hiện phương thức store của class PostController
					$post->store();
					break;
				case 'edit': // act_post = edit sẽ trả về form edit
					$post->edit();
					break;
				case 'update': // act_post = update sẽ thực hiện phương thức update của class PostController
					$post->update();
					break;
				case 'delete': // act_post = delete thì sẽ thực hiện phương thức delete
					$post->delete();
					break;
				default:
					break;
			}
			break;
		case 'tags': // trả về table tags
			include_once ('controller/TagController.php');// gọi file controller/TagController.php để lấy dữ liệu

			//khởi tạo biến để lấy dữ liệu của class
			$tags = new TagController();

			// khởi tạo biến truyền lên bằng phương thức  get để xet thực thi table
			$act_tags = isset($_GET['act_tags'])?$_GET['act_tags']:'index';

			switch ($act_tags) {
				case 'index': // act_tags = index sẽ trả về dữ liệu load lên table theo phương thức index của TagsController
					$tags->index();
					break;
				case 'show':
					$id = $_GET['id'];
					$tags->show($id);
					break;
				case 'delete':
					$tags->delete();
					break;

				default:
					break;
			}
			break;
		
		default:
			break;
	}
	
?>
<?php 
	include_once('view/footer.php');
?>
