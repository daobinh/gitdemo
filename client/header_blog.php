<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Blog</title>

    <link rel="stylesheet" type="text/css" href="app/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="app/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="app/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="app/css/grid.css">
    <link rel="stylesheet" type="text/css" href="app/css/styles.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/sb-admin-2.css">



    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="app/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="app/css/primary-menu.css">
    <link rel="stylesheet" type="text/css" href="app/css/magnific-popup.css">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="app/css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <style>
        .padded-50{
            padding: 40px;
        }
        .text-center{
            text-align: center;
        }
    </style>

</head>


<body class=" ">

<div class="content-wrapper">
    
    <header class="header" id="site-header">
        <div class="container">
                <div class="header-content-wrapper">
                    <div class="logo">
                        <div class="logo-text">
                            <div class="logo-title">Zent BLOG</div>
                        </div>
                    </div>

                    <nav id="primary-menu" class="primary-menu">
                        <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                            <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                                <svg width="1000px" height="1000px">
                                    <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                    <path id="pathE" d="M 300 500 L 700 500"></path>
                                    <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                </svg>
                            </span>
                        </a>
                        <ul class="primary-menu-menu" style="overflow: hidden;">
                            <li class="">
                                <a href="">NEWS</a>
                            </li>
                           <!--  <li class="">
                                <a href="">VIDEOS</a>
                            </li>
                            <li class="">
                                <a href="">DISCUSSIONS</a>
                            </li>
                            <li class=""> -->
                                <a href="login.php">LOGIN</a>
                            </li>
                            <!-- <li class="">
                                <a href="">NEWSLETTER</a>
                            </li> -->
                        </ul>
                        
                    </nav>
                   <ul class="nav navbar-top-links navbar-right">
        
                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="index.php?mod=post&act_post=create&id=<?php echo $_SESSION['login'] ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="index.php?mod=user&act=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- <ul class="nav-add">
                        <li class="search search_main" style="color: black; margin-top: 5px;">
                            <a href="#" class="js-open-search">
                                <i class="seoicon-loupe"></i>
                            </a>
                        </li>
                    </ul> -->  
                </div>
        </div>
    </header>
<div class="stunning-header stunning-header-bg-lightviolet">
<div class="stunning-header-content">
    <h1 class="stunning-header-title">This is the post title</h1>
</div>
</div>

    <div class="container">
        <div class="row">
            