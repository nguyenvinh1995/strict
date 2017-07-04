<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 6/21/2017
 * Time: 10:09 AM
 */
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'admin_strict';

$con = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($con,"SET NAMES 'UTF8'");
?>