<?php 
	class Connection{
		public $conn;

		public function __construct(){
			// Thông số kết nối CSDL
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "blog";
			
			// Create connection
			$this->conn = new mysqli($servername,$username,$password,$dbname);
			$this->conn->set_charset("utf8");

			// check connection
			if ($this->conn->connect_error) {
				die("Connection failed : " . $this->conn->connect_error);
			}
		}
	}
?>