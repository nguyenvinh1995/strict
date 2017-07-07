<?php

$sql = "SELECT * FROM icon";
$query = mysqli_query($con,$sql);
$totalrows = mysqli_num_rows($query);

?>

<div class="container message" style="margin-top: 100px" >
    <div class="row">
        <hr>
        <div  class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h3>All Link (<?php echo $totalrows ?>)</h3>
        </div>
        <hr>
        <table class="table table-striped table-bordered">

            <thead>
            <tr>

                <th width="15%">Name</th>
                <th width="50%">Link</th>
                <th width="10%" class="text-center">Fix link</th>

            </tr>
            </thead>
            <tbody>
            <?php
            while ($rows = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['link'];?></td>

                    <td class="text-center">
                        <a onclick="return confirm('Bạn muốn sửa link này ?')" href="main.php?page_layout=edit-icon&id=<?php echo $rows['id'];?>">
                            <button type="button" class="btn btn-success">
                                <span class="glyphicon glyphicon-list-alt"></span>
                            </button>
                        </a>
                    </td>

                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

    </div>

</div>