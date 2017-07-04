<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 6/23/2017
 * Time: 3:40 PM
 */
$id = $_GET['id'];
$sql = "DELETE FROM showcase WHERE id ='$id'";
$query = mysqli_query($con,$sql);
header("location:main.php?page_layout=showcase");
?>