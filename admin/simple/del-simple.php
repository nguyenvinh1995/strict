<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 6/23/2017
 * Time: 11:43 AM
 */
$id = $_GET['id'];
$sql = "DELETE FROM simple WHERE id ='$id'";
$query = mysqli_query($con,$sql);
header("location:main.php?page_layout=simple");
?>