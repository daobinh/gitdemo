<?php 
	include_once ('model/User.php');

	class UserController{
		private $model;

		public function __construct(){
			$this->model = new User();
			

		}

		public function index(){
			$data = $this->model->All();
			
			foreach ($data as $key => $value) {
				if ($value['gender'] == 1) {
					$data[$key]['gender'] = "Nam";
				}
				else{
					$data[$key]['gender'] = "Nữ";
				}
			}
			include_once('view/user/list.php');
		}

		public function show($id){
			$data = $this->model->find($id);

			include_once('view/user/detail.php');
		}

		public function create(){
			include_once('view/user/create.php');
		}

		public function store(){

			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
			$data['avatar'] = $_POST['avatar'];
			$data['password'] = md5($_POST['password']);
			$data['mobile'] = $_POST['mobile'];
			$data['gender'] = $_POST['gender'];
			$data['address'] = $_POST['address'];
		 
			$this->model->create($data);

			header('Location:index.php?mod=user');


		}

		public function edit($id){
			$user = $this->model->find($id);
			$gender_male = '';
			$gender_female = '';
			$gender_other = '';
			// die($user['gender']);
			if ($user['gender'] ==1) {
				$gender_male = 'checked';
			}
			else if($user['gender']==0){
				$gender_female = 'checked';
			}
			else{
				$gender_other = 'checked';
			}
			include_once("view/user/edit.php");
		}

		public function update(){
			$data['id'] = $_POST['id'];
			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
			$data['password'] = md5($_POST['password']);
			$data['mobile'] = $_POST['mobile'];
			$data['gender'] = $_POST['gender'];
			$data['address'] = $_POST['address'];

			$this->model->update($data);

			header('Location:index.php?mod=user');
		}

		public function delete($id){
			$this->model->delete($id);

			header('Location:index.php?mod=user');
		}

		public function login(){

			$email = $_POST['email'];
			$password = md5($_POST['password']);
			
			$data =  $this->model->login($email);
			include_once('home.php');
			if ($email == $data['email'] && $password == $data['password']) {
				$_SESSION['login']= $data['id'] ;
				if ($data['status'] == 1) {

					header('Location: index.php');
				}
				else{
					header('Location: home.php');
				}
				
			}
			else{
				header('Location: login.php');
			}
		}

		public function logout(){
			unset($_SESSION['login']);
			header('Location: login.php');
		}
	}
?>