<?php
/**
 * Created by PhpStorm.
 * User: Vinh Nguyen
 * Date: 6/21/2017
 * Time: 8:48 AM
 */
require_once("connect.php");
session_start();
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM  member WHERE user ='$user' AND pass = '$pass' ";
    $query = mysqli_query($con, $sql);
    $totalrows = mysqli_num_rows($query);

    if ($totalrows <= 0) {
        $error = 'Tai khoan khong hop le';
    } else {
        if (isset($_POST['CHECK'])) {
            setcookie('user', $user, time() + 3600);
            setcookie('pass', $pass, time() + 3600);
        } else {
            $_SESSION['user'] = $user['user'];
            $_SESSION['pass'] = $pass['pass'];
        }
        header('location:main.php');

    }
}

?>

<!DOCTYPE html>
<html lang="en"
xmlns="http://www.w3.org/1999/html"/>

<head>
    <title>Trang đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin_css/login.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.2.1.min.js"></script>
</head>

<body>

<header>
    <div class="container logo">
        <img src="../img/logo.png">
    </div>
</header>

<div class="container text-center">
    <div class="row">
        <h1>LOGIN STRICT</h1>
        <p class="error text-center"><?php if (isset($error)) {
                echo "$error";
            }
            ?>
        </p>
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <form class="form" id="my-form" enctype="multipart/form-data" method="post">

                <div class="form-group">
                    <span class="error" id="user_errors"></span>
                    <label for="user"></label>
                    <input type="text" name="user" class="form-control" id="user" placeholder="User">
                </div>

                <div class="form-group">
                    <span class="error" id="pass_errors"></span>
                    <label for="user"></label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                </div>

                <div class="checkbox ">
                    <input type="checkbox" name="check" id="checkbox">
                    <label for="checkbox">GHI NHỚ</label>
                </div>

                <button id="submit" type="submit" name="submit" class="btn btn-blue">ĐĂNG NHẬP</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
