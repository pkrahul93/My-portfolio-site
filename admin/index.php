<?php
session_start();
require('../config.inc.php');

$msg = '';

if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($connect,$_POST['user_id']);
    $pass = mysqli_real_escape_string($connect,$_POST['password']);

    $sql = "select * from admin where user_id = '$user' and password_ = '$pass'";
    $result = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $_SESSION['ADMIN_LOGIN'] = 'yes';
        $_SESSION['ADMIN_USERNAME'] = $user;
        header('location:dashboard.php');
        die();
    } else {
        $msg = "Please Enter Correct Login Credentials.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="../admin/assets/img/fav1.png">
    <link rel="icon" type="image/png" href="../admin/assets/img/fav1.png">
    <title>Content Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style type="text/css">
        /* .login-form {
            width: 340px;
            margin: 50px auto;
        } */

        .login-form form {
            margin-bottom: 15px;
            background: rgba(0, 0, 0, .6);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 45px;
            width: 400px;
            border-radius: 14px;
        }

        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 20px;
            font-weight: bold;
            width: 195px;
            margin: auto;
        }
    </style>
</head>

<body style="background-image:url('assets/img/cover2.jpg')" style="background-size:100%;">

    <div class="login-form d-flex justify-content-center mt-4">
        <form method="POST">
            <h2 class="text-center" style="color:#fff;font-size:35px;">Log In</h2>
            <center><img src="../admin/assets/img/logo11.png" style="width:210px;height:145px;padding:20px 0px;"></center>
            <div class="form-group mb-3">
                <input type="text" name="user_id" class="form-control" placeholder="Username" autocomplete="off" required>
            </div>
            <div class="form-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="form-group">
                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
            </div>
            <div class="form-group text-center" style="color:pink;font-weight:600;">
                <?php echo $msg; ?>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>