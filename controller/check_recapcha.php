<?php
	//cấu hình thông tin do google cung cấp
	$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
	$site_key    = '6LcShikUAAAAAGJLJ5HiT0TYi53pJ1VLQHzJJwnq';
	$secret_key  = '6LcShikUAAAAAGWqK4vfSuLYCCpy9sTvSIywPRxP';
	  
	//kiem tra submit form
	if(isset($_POST['submit']))
	{
	    //lấy dữ liệu được post lên
	    $site_key_post    = $_POST['g-recaptcha-response'];
	      
	    //lấy IP của khach
	    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
	    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    } else {
	        $remoteip = $_SERVER['REMOTE_ADDR'];
	    }
	     
	    //tạo link kết nối
	    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;


	    //lấy kết quả trả về từ google
	    $response = file_get_contents($api_url);
	    //dữ liệu trả về dạng json
	    $response = json_decode($response);
	    // var_dump($response);
	    //  if(!isset($response->success))
	    // {   
	    //     header('Location: add.php');
	    //     echo 'Captcha khong dung';
	    // }
	    // if($response->success == true)
	    // {
	    //     echo 'Captcha dung';
	    //     header('Location: index.php');
	    // }else{
	       
	    //     header('Location: add.php');
	    //     echo 'Captcha khong dung';
	    // }
	}
?>