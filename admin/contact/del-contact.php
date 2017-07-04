<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 7/3/2017
 * Time: 10:38 PM
 */
$id = $_GET['id'];
$sql = "DELETE FROM contact WHERE id ='$id'";
$query = mysqli_query($con,$sql);
header("location:main.php?page_layout=contact");
?>