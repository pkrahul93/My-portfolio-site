<?php
include('sidebar.php');

?>





<div class="container">
    <?php

    if (isset($_GET['id'])) {


        $link = mysqli_connect("localhost", "reliable_admin", "snmtech#123", "reliable_credit");

        session_start();
        if (isset($_SESSION["username"])) {
            header("location:index.php");
        }


        if (isset($_POST['update'])) {


            $product_id = $_GET['id'];

            $password = mysqli_real_escape_string($connect, $_POST["password"]);

            $password = md5($password);

            $sql = "UPDATE register SET password='$password' where id='$product_id'";
            if (mysqli_query($link, $sql)) {
                echo "<h3 align='center' style='padding:40px;color:#FFA114;'>Password Changed successfully.</h3>";
            } else {
                echo "ERROR: Could not able to execute $sql. "
                    . mysqli_error($link);
            }
        }
    }


    ?>






    <form action="#" method="POST">






        <div class="form-group" style="padding-top:50px;">
            <label>New Password</label>
            <input type="password" name="n_password" class="form-control" placeholder="Enter New Password">
        </div>




        <input type="submit" name="update" class="btn btn-primary" value="Change Password">

    </form>

</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>