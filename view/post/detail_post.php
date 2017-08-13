<?php 
	echo '<h2 style="text-align: center;"> THÔNG TIN BÀI VIẾT </h2>';
	echo "<h3>";
	echo '<li>' ."ID : " .$data['id'] . '</li>';
	echo '<li>' ."USER_ID : " .$data['user_id'] . '</li>';
	echo '<li>' ."TITLE :". $data['title'] . '</li>';
	echo '<li>' ."DESCRIPTION :". $data['description'] . '</li>';
	echo '<li>' ."CONTENT :". $data['content'] . '</li>';
	echo '<li>' ."CREATED_AT :". $data['created_at'] . '</li>';
	echo '<li>' ."UPDATED_AT :". $data['updated_at'] . '</li>';
	echo "</h3>";
?>