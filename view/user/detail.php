<?php 
	echo '<h2 style="text-align: center;"> THÔNG TIN USER </h2>';
	echo "<h3>";
	echo '<li>' ."ID : " .$data['id'] . '</li>';
	echo '<li>' ."NAME : " .$data['name'] . '</li>';
	echo '<li>' ."EMAIL : " .$data['email'] . '</li>';
	echo '<li>' ."MOBILE :". $data['mobile'] . '</li>';
	echo '<li>' ."GENDER :". $data['gender'] . '</li>';
	echo '<li>' ."ADDRESS :". $data['address'] . '</li>';
	echo '<li>' ."CREATED_AT :". $data['created_at'] . '</li>';
	echo '<li>' ."UPDATED_AT :". $data['updated_at'] . '</li>';
	echo "</h3>";
?>