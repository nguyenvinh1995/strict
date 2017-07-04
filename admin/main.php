<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 6/21/2017
 * Time: 2:45 PM
 */
session_start();
require_once("connect.php");
if (
        (isset($_SESSION['user']) && isset($_SESSION['pass'])) || (isset($_COOKIE['user']) && isset($_COOKIE['pass']))) {
?>

<!DOCTYPE html>
<html lang="en"
      xmlns="http://www.w3.org/1999/html"/>

<head>
    <title>Trang quản trị</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin_css/main.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
<body>
<header>

    <nav class="navbar navbar-inverse bar-container">
        <div class="container">
            <div class="navbar-header logo">
                <button type="button" class="navbar-toggle bar-tog" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="../img/logo.png" alt="logo">
            </div>

            <div class="collapse navbar-collapse bar-coll" id="myNavbar">
                <ul class="nav navbar-nav list-nav nav1">
                    <li><a href="main.php?page_layout=banner">Banner</a></li>
                    <li><a href="main.php?page_layout=simple">Simple</a></li>
                    <li><a href="main.php?page_layout=showcase">Showcase</a></li>
                    <li><a href="main.php?page_layout=contact">Contact</a></li>
                    <li><a href="main.php?page_layout=icon">Icon</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

</header>
<div>
    <?php

     if (isset($_GET ['page_layout'])){
         switch ($_GET['page_layout']) {

             case 'banner':
                 include_once('banner/banner.php');
                 break;
             case 'add-banner':
             include_once('banner/add-banner.php');
             break;
             case 'edit-banner':
                 include_once('banner/edit-banner.php');
                 break;
             case 'del-banner':
                 include_once('banner/del-banner.php');
                 break;

             case 'simple':
                 include_once ('simple/simple.php');
                 break;
             case 'add-simple':
                 include_once('simple/add-simple.php');
                 break;
             case 'edit-simple':
                 include_once('simple/edit-simple.php');
                 break;
             case 'del-simple':
                 include_once('simple/del-simple.php');
                 break;

             case 'showcase':
                 include_once ('showcase/showcase.php');
                 break;
             case 'add-showcase':
                 include_once ('showcase/add-showcase.php');
                 break;
             case 'edit-showcase':
                 include_once ('showcase/edit-showcase.php');
                 break;
             case 'del-showcase':
                 include_once ('showcase/del-showcase.php');
                 break;

             case 'contact':
                 include_once ('contact/contact.php');
                 break;
             case 'show-contact':
                 include_once ('contact/show-contact.php');
                 break;
             case 'del-contact':
                 include_once ('contact/del-contact.php');
                 break;


             case 'icon':
                 include_once ('icon/icon.php');
                 break;
             case 'edit-icon':
                 include_once ('icon/edit-icon.php');
                 break;





             default:
                 include_once ('banner/banner.php');
                 break;
    }
     }else{
         include_once('banner/banner.php');
     }
    ?>
</div>
</body>
</html>

<?php
}else{
    header('location:main.php');
}
?>

