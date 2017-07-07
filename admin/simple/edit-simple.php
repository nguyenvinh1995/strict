<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 6/23/2017
 * Time: 11:43 AM
 */
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM simple WHERE id ='$id'";
    $query = mysqli_query($con, $sql);
    $total = mysqli_num_rows($query);
    $rows = mysqli_fetch_array($query);
}
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    if ($_FILES ['anh']['name'] == '') {
        $anh = $_POST['anh'];
    } else {
        $anh = $_FILES['anh']['name'];
        $simple_name = $_FILES['anh']['tmp'];
    }
    move_uploaded_file($simple_name, '../img/'.$anh);

    $sql = "UPDATE simple SET anh = '$anh', title ='$title', description= '$description' WHERE id= '$id'";
    $query = mysqli_query($con, $sql);
    $total = mysqli_fetch_array($query);
    header("location:main.php?page_layout=simple");
}
?>
<div class="container edit-simple" style="margin-top: 100px">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-6 text-center">
            <h3>Edit Simple <?php echo $rows['id'] ?></h3>
            <hr>
            <img src="../img/<?php echo $rows['anh'] ?>" alt="" width=100% style="padding: 10px 0px;">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-6">
            <form enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label>ID</label>
                    <input type="number" name="id" value="<?php echo $rows['id'] ?>" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo $rows['title'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" value="<?php echo $rows['description'] ?>"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label>Source</label>
                    <input type="file" name="anh" class="form-control">
                    <input type="hidden" name="anh" value="<?php echo $rows['anh']; ?>">
                </div>

                <button name="submit" type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-cloud-upload"></span> Upload
                </button>

                <a href="main.php?page_layout=simple" title="" style="float: right">
                    <button type="button" class="btn btn-primary">Hủy</button>
                </a>

            </form>
        </div>

        <?php

        ?>

    </div>
</div>