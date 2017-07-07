<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 6/23/2017
 * Time: 2:00 PM
 */

 $sql = "SELECT * FROM showcase";
 $query = mysqli_query($con, $sql);
 $totalrows = mysqli_num_rows($query);

?>
<div class="container showcase" style="margin-top: 100px">
    <hr>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h3>All Showcase (<?php echo $totalrows ?>)</h3>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <a style="float: right;" href="main.php?page_layout=add-showcase">
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
                        <a href="main.php?page_layout=edit-showcase&id=<?php echo $rows['id'] ?>">
                            <button  style="margin-top: 5px;" onclick="return confirm('Bạn muốn sửa Showcase này ?')"  type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-link"></span> Fix
                            </button>
                        </a>
                        <?php
                        if ($totalrows > 2) {
                            ?>
                            <a onclick="return confirm('Bạn muốn xóa Showcase này ?')"
                               href="main.php?page_layout=del-showcase&id=<?php echo $rows['id'] ?>">
                                <button style="float: right;margin-top: 5px;" type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-remove"></span> Del
                                </button>
                            </a>
                            <?php
                        } else {
                            ?>
                            <a onclick="return alert('Bạn không thể xóa Showcase này ?')" href="">
                                <button style="float: right;margin-top: 5px;" type="button" class="btn btn-default">
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
                <table class="table table-striped table-hover table-bordered">

                    <thead>
                    <tr>
                        <th>Thông Tin</th>
                        <th>Showcase số <?php echo $rows['id'] ?> </th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td class="title">ID</td>
                        <td><?php echo $rows['id'] ?></td>
                    </tr>

                    <tr>
                        <td class="title">Title</td>
                        <td><?php echo $rows['title'] ?></td>
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
