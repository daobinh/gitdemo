<?php 
    session_start();
    ob_start();
    include_once('client/header_blog.php');
?>
<?php
    $view = isset($_GET['view'])?$_GET['view']:'post';
    include_once ('controller/PostController.php');// gọi file controller/PostController.php để lấy dữ liệu

    //khởi tạo biến để lấy dữ liệu của class
    $post = new PostController();
    switch ($view) {
        case 'post':
            $post->blog_id();
            break;
        case 'create': // act_post = create trả về form create
            $post->create();
            break;
        case 'view_id':
            $post->view_post();
            break;
        default:
            # code...
            break;
    }
    
 ?>

<?php include_once('client/footer_blog.php') ?>