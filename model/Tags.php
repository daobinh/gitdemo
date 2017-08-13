<?php 
	include_once('Model.php'); // gọi file connection để kết nối csdl

	class Tags extends Model{
		public $table = "tags";
		// public $primaryKey = "post_id";
		public function __construct(){
			parent::__construct();
		}
	}
?>