<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 6/21/2017
 * Time: 5:09 PM
 */

session_start();
session_destroy();
setcookie("user", "", time() - 3600);
setcookie("pass", "", time() - 3600);
header('location:login.php');
?>