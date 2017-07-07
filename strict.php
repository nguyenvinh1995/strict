<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 7/4/2017
 * Time: 2:44 PM
 */
include_once('admin/connect.php');

//banner
$sql_banner = "SELECT * FROM banner";
$query_banner = mysqli_query($con, $sql_banner);
$totalrows_banner = mysqli_num_rows($query_banner);

//simple
$sql_simple = "SELECT * FROM simple";
$query_simple = mysqli_query($con, $sql_simple);
$totalrows_simple = mysqli_num_rows($query_simple);

//showcase
$sql_showcase = "SELECT * FROM showcase";
$query_showcase = mysqli_query($con, $sql_showcase);
$totalrows_showcase = mysqli_num_rows($query_showcase);

// Contact
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql_contact = " INSERT INTO contact ( name , email, message )VALUES('$name','$email','$message')";
    $query_contact = mysqli_query($con,$sql_contact);
}

// icon
$sql_icon = "SELECT * FROM icon";
$query_icon = mysqli_query($con, $sql_icon);
$totalrows_icon = mysqli_num_rows($query_icon);


?>

<!DOCTYPE html>
<html lang="en"
      xmlns="http://www.w3.org/1999/html"/>
<head>
    <title>Strict</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/showcase.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="strict.js"></script>
</head>

<body>

<header>
    <nav class="navbar navbar-inverse bar-container">
        <div class="container">
            <div class="navbar-header logo">
                <img src="img/logo.png" alt="logo">
            </div>
        </div>
    </nav>

</header>

<div class="container-w3 banner">
    <div class="w3-container text-center">
        <div id="mycarousel" class="carousel slide" data-ride="mycarousel">
            <div class="carousel-inner"
            ">
            <?php
            $i = 0;
            while ($rows_banner = mysqli_fetch_array($query_banner)) {
                ?>

                <?php if ($i == 0) {
                    echo "<div class='item active' transition: 0.5s>";
                } else {
                    echo "<div class='item' transition: 0.9s>";
                } ?>

                <img src="img/<?php echo $rows_banner['anh'] ?>">
                <div class="anh-banner text-center">
                    <h1><?php echo $rows_banner['title'] ?></h1>
                    <hr>
                    <p><?php echo $rows_banner['description'] ?></p>
                </div>

                <?php echo "</div>"; ?>
                <?php
                $i += 1;
            }
            ?>
        </div>

        <a class="left carousel-control" href="#mycarousel" data-slide="prev" aria-hidden="true">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#mycarousel" data-slide="next" aria-hidden="true">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

        <a href="#contact-us" class="active">
            <button type="button" class="btn btn-lg btn1">Call to action</button>
        </a> <br>
        <a href="#contact-us" class="active"><span class="glyphicon glyphicon-chevron-down gly1"></span></a>
    </div>

</div>
</div>

<div class="simple-and-pure">
    <div class="container">
        <div class="text text-center">
            <h2>Simple & pure design.</h2>
            <p>Designers everywhere gush with admiration upon seeing a web design and exclamim "its beautiful ,its so
                clean!". there are a countless number of webdesing round-ups delicated to 'clean' design and it is a
                term
                thrown around quite a bit in the web design community.It can be easy to spot a good example clean design
            </p>
        </div>
    </div>
</div>

<div class="showicon"><br>
    <div class="container">
        <div class="row icon-showicon text">
            <div class="col-md-12 text-center">
                <?php
                while ($rows_simple = mysqli_fetch_array($query_simple)) {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <img src="img/<?php echo $rows_simple['anh'] ?>">
                        <div class="anh-simple text-center">
                            <h3><?php echo $rows_simple['title'] ?></h3>
                            <hr>
                            <p><?php echo $rows_simple['description'] ?></p>

                        </div>

                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <br>
    </div>
</div>

<div class="showcase" id="showcase">
    <div class="container">
        <div class=" row text-showcase text-center">
            <h4>Showcase your work like a pro.</h4><br><h5>Contact me if you like me work</h5>
        </div>
        <br> <br> <br>
            <div class=" col-md-12">
                <?php
                while ($rows_showcase = mysqli_fetch_array($query_showcase)) {
                    ?>
                    <div class="col-md-4 col-sm-12 pic ">
                        <div class="pic-modal">
                        <img src="img/<?php echo $rows_showcase['anh'] ?>" class="image" >
                        <div class="project" style="display: none">
                            <span class="title"><?php echo $rows_showcase['title'] ?></span>
                            <span class="description"><?php echo $rows_showcase['description'] ?></span>
                        </div>
                        </div>
                        <div class="pic-hover flex-container text-center">
                            <button type="button" class="btn btn-lg btn3 flex-item zoom" data-toggle="modal" data-target=".bs-example-modal-lg-1">
                                <span class="glyphicon glyphicon-zoom-in glyphicon2"></span>
                            </button>
                            <a href="">
                                <button type="button" class="btn btn-lg btn3 flex-item">
                                    <span class="glyphicon glyphicon-link glyphicon3"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

        </div>

        <div class="modal fade bs-example-modal-lg-1" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h7 class="modal-title" style="font-size: 30px; text-align: center">PROJECTS</h7>
                    </div>

                    <div class="modal-body">

                        <div class="flex-container">
                            <a href="#showcase"><i class="fa fa-angle-left fa-3x flex-item prv" aria-hidden="true"></i></a>
                            <img src="" id="modal-image" class="flex-item modal-img">
                            <a href="#showcase">
                                <i class="fa fa-angle-right fa-3x flex-item next" aria-hidden="true"></i>
                            </a>
                        </div> <br>
                        <h7  style="font-size: 25px;">Thông tin dự án</h7> <br> <br>
                            <span id="modal-title"> </span>
                    </div>
                    <div class="modal-footer">
                        Link project: <a href="" id="modal-description"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact text-center" id="contact-us">
    <h6>Stay with us</h6>
    <p>We ansure quality & support</p>
    <div class="container">
        <div class="row">
            <div class="  col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                <form class="form" id="my-form" enctype="multipart/form-data" method="post">

                    <div class="form-group form__item">
                        <span class="error" id="name_errors"></span>
                        <label for="name"></label>
                        <input type="text" name="name" class="form-control name" id="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <span class="error" id="email_errors"></span>
                        <label for="email"></label>
                        <input type="text" name="email" class="form-control email" id="email" placeholder="Email Address">
                    </div>
                    <br>

                    <div class="form-group">
                        <span class="error" id="message_errors"></span>
                        <textarea  name="message" class="form-control meassge" id="message" placeholder="Message" ></textarea></div>

                    <div class="checkbox">
                        <input type="checkbox" name="check" id="checkbox">
                        <label for="checkbox">Subscribe Newsletter</label>
                    </div>
                    <button id="submit" type="submit" name="submit" class="btn btn-blue">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row ">
            <div class=" col-lg-6 col-md-6 col-sm-4  col-xs-4 ">
                <p class="text-footer"> Copyright 2014,Strict</p></div>
            <div class=" col-lg-6 col-md-6 col-sm-8 col-xs-8 glyphicon1 ">
                <div class="row">
                    <?php
                    while ($rows_icon = mysqli_fetch_array($query_icon)) {
                        ?>
                        <div class=" col-md-2 col-sm-2 col-xs-2 col-lg-1" style="float: right">
                            <a href="<?php echo $rows_icon['link']; ?>"> <img
                                        src="img/glyphicon<?php echo $rows_icon['id'] ?>.jpg"></a></div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>

</body>
</html>
