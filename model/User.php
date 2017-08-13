<?php 
	include_once('Model.php');

	class User extends Model{

		public $table = "users";

		public function __construct(){
			parent::__construct();
		}

		public function login($email){
			// câu lệnh truy vấn cơ sở dữ liệu
			$query = "SELECT * FROM users where email = '$email'";
			
			// thực thi câu lệnh truy vấn cơ sở dữ liệu
			$result = $this->conn->query($query);
			return $data = $result->fetch_assoc();
		}
	}
?>