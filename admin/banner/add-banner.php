<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 6/23/2017
 * Time: 9:29 AM
 */

	if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $anh = $_FILES['anh']['name'];
        $banner = 	$_FILES['anh']['temp'];
        move_uploaded_file($banner, '../img/'.$anh);

        $sql = " INSERT INTO banner(anh,title,description)VALUES( '$anh' , '$title' , '$description' )";
        $query = mysqli_query($con,$sql);

        $sql_max = " SELECT * FROM banner ORDER BY id DESC LIMIT 1";
        $query_max = mysqli_query($con,$sql_max);
        $rows = mysqli_fetch_assoc($query_max);
        header("location:main.php?page_layout=banner");
    }
?>

<div class="container " style="margin-top: 100px">
    <h3 class="text-center">Thêm Banner mới</h3>
    <hr>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-6">

        <form enctype="multipart/form-data"  method="post" action="main.php?page_layout=add-banner" >

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Upload</label>
                <input type="file" name="anh" class="form-control" required>
            </div>
            <button name="submit" type="submit" class="btn btn-success btn-md">
                <span class="glyphicon glyphicon-cloud-upload"></span> Upload
            </button>

        </form>

    </div>
</div>
