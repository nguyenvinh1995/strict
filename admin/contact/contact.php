<?php

$sql = "SELECT * FROM contact";
$query = mysqli_query($con,$sql);
$totalrows = mysqli_num_rows($query);

?>

<div class="container message" style="margin-top: 100px" >
    <div class="row">
        <hr>

        <div  class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h3>All Message (<?php echo $totalrows ?>)</h3>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <a onclick="return confirm('Bạn muốn xóa tất cả Message ?')" style="float: right;" href="main.php?page_layout=del-contact&id=all">
                <button type="button" class="btn btn-danger add">
                    <span class="glyphicon glyphicon-trash"></span> All
                </button>
            </a>
        </div>

        <hr>
        <table class="table table-striped table-bordered">

            <thead>
            <tr>

                <th width="15%">Name</th>
                <th width="15%">Email</th>
                <th width="50%">Message</th>
                <th width="8%" class="text-center">Chi tiết</th>
                <th width="8%" class="text-center">Xóa</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($rows = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['message'];?></td>
                    <td class="text-center">
                        <a href="main.php?page_layout=show-contact&id=<?php echo $rows['id'];?>">
                            <button type="button" class="btn btn-info">
                                <span class="glyphicon glyphicon-list-alt"></span>
                            </button>
                        </a>
                    </td>
                    <td class="text-center">
                        <a onclick="return confirm('Bạn muốn xóa Message này ?')" href="main.php?page_layout=del-contact&id=<?php echo $rows['id'];?>" ><button type="button" class="btn btn-danger">
										<span class="glyphicon glyphicon-trash">
                            </button></a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

    </div>

</div>