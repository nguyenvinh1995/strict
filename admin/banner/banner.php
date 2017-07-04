<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 6/21/2017
 * Time: 4:27 PM
 */

$sql = " SELECT * FROM banner ";
$query = mysqli_query($con, $sql);
$totalrows = mysqli_num_rows($query);

?>

<div class="container banner"  style="margin-top: 100px">
    <hr>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h3>All Banner (<?php echo $totalrows ?>)</h3>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <a style="float: right;" href="main.php?page_layout=add-banner">
                <button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-plus"></span> ADD
                </button>
            </a>
        </div>
    </div>
    <hr>
    <?php
    while ($rows = mysqli_fetch_array($query)) {
        ?>
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../img/<?php echo $rows['anh'] ?>" width=100% height=auto>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 flex-container">

                        <a  onclick="return confirm('Bạn muốn sửa Banner này ?')" href="main.php?page_layout=edit-banner&id=<?php echo $rows['id'] ?>">
                            <button  style="margin-top: 5px;" type="button" class="btn btn-default btn-md">
                                <span class="glyphicon glyphicon-link"></span> Fix
                            </button>
                        </a>

                                                <!--xóa banner-->
                        <?php
                        if ($totalrows > 2) {
                            ?>

                            <a onclick="return confirm('Bạn muốn xóa Banner này ?')"
                               href="main.php?page_layout=del-banner&id=<?php echo $rows['id'] ?>">
                                <button style="float: right;margin-top: 5px;"  type="button" class="btn btn-default btn-md">
                                    <span class="glyphicon glyphicon-remove"></span> Del
                                </button>
                            </a>

                            <?php
                        } else {
                            ?>
                            <a onclick="return alert('Bạn không thể xóa Banner này ?')" href="">
                                <button style="float: right;margin-top: 5px;"  type="button" class="btn btn-default btn-md">
                                    <span class="glyphicon glyphicon-remove"></span> Del
                                </button>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-7 col-md-9 col-lg-9">
                <table class="table table-striped table-hover table-bordered ">

                    <thead>
                    <tr>
                       <th>Thông Tin</th>
                        <th>Banner số <?php echo $rows['id'] ?> </th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td class="title">ID</td>
                        <td ><?php echo $rows['id'] ?></td>
                    </tr>

                    <tr>
                        <td class="title">Title</td>
                        <td ><?php echo $rows['title'] ?></td>
                    </tr>

                    <tr>
                        <td class="title">Description</td>
                        <td><?php echo $rows['description'] ?></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <?php
    }
    ?>
</div>

