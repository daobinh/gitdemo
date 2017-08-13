<?php 
	include_once('Connection.php');
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	class Model{
		public $conn = null;

		public $table = "";
		public $primaryKey = "id";

		public function __construct(){
			$connection = new Connection();
			$this->conn = $connection->conn;
		}
		
		public function All(){

			$data = array();

			$query = "SELECT * FROM $this->table";

			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

			return $data;
		}

		public function find($id){
			// câu lệnh truy vấn cơ sở dữ liệu
			$query = "SELECT * FROM $this->table where $this->primaryKey = $id ";

			// thực thi câu lệnh truy vấn cơ sở dữ liệu
			$result = $this->conn->query($query);

			return $result->fetch_assoc();
		}

		public function create($data){

			$fields = "";
			$values = "";


			foreach ($data as $key => $value) {
				$fields .= ",$key";
				$values .= ",'".mysqli_real_escape_string($this->conn,$value)."'";
			}
						$fields = trim($fields,",");
			$values = trim($values,",");


			$sql = "INSERT INTO ".$this->table." (".$fields.") VALUES (".$values.")";

			$status = $this->conn->query($sql);

			return $status;
		}

		public function update($data){
			$sql = "";
			foreach ($data as $key => $value) {
				$sql .= ",$key = '".mysqli_real_escape_string($this->conn,$value)."'";
			}

			$sql = trim($sql,",");

			$query = "UPDATE ".$this->table." SET ".$sql." WHERE ".$this->primaryKey."=".$data[$this->primaryKey]."";
			$status = $this->conn->query($query);
			return $status;

		}

		public function delete($id){
			$query = "DELETE FROM $this->table WHERE $this->primaryKey = $id";

			$this->conn->query("SET foreign_key_checks = 0");

			return $this->conn->query($query);
			
			$this->conn->query("SET foreign_key_checks = 1");
		}

		public function pagination($start,$limit){
			$data = array();

			$query = "SELECT * From $this->table LIMIT $start,$limit ";

			
			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}	
	}
?>