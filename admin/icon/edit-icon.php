<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 7/3/2017
 * Time: 10:40 PM
 */
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM icon WHERE id='$id'";
    $query = mysqli_query($con,$sql);
    $total = mysqli_num_rows($query);
    $rows  = mysqli_fetch_array($query);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $link = $_POST['link'];

    $sql = "UPDATE icon SET  link = '$link' WHERE id = '$id'";
    $query = mysqli_query($con,$sql);
    $total = mysqli_num_rows($query);
    header("location: main.php?page_layout=icon");
}

?>
<div class="container edit-banner" style="margin-top: 100px">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-6 text-center">
            <h3>Edit Link <?php echo $rows['id']?></h3>
            <hr>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-6">
            <form enctype="multipart/form-data"  method="post" >
                <div class="form-group">
                    <label>ID</label>
                    <input type="number" name="id" value="<?php echo $rows['id'] ?>" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $rows['name'] ?>" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" value="<?php echo $rows['link'] ?>" class="form-control">
                </div>

                <button name="submit" type="submit" value="submit" class="btn btn-success">Fix Link</button>
                <a href="main.php?page_layout=icon" title="">
                    <button type="button" class="btn btn-danger" style="float: right" >Hủy</button>
                </a>

            </form>
        </div>

        <?php

        ?>

    </div>
</div>