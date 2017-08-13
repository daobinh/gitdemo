
<?php 
	echo '<h2 style="text-align: center;"> THÔNG TIN TAGS </h2>';
	echo "<h3>";
	echo '<li>' ."ID : " .$data['id'] . '</li>';
	echo '<li>' ."NAME : " .$data['name'] . '</li>';
	echo '<li>' ."POST_ID :". $data['post_id'] . '</li>';
	echo '<li>' ."CREATED_AT :". $data['created_at'] . '</li>';
	echo '<li>' ."UPDATED_AT :". $data['updated_at'] . '</li>';
	echo "</h3>";
?>