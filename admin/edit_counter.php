<?php include 'sidebar.php'; ?>

<?php
$g_id = $_GET['id'];
$message = '';
if (isset($_POST["edit_counter"])) {
    $clients = $_POST["clients"];
    $sites = $_POST["sites"];
    $exps = $_POST["exps"];
    $apps = $_POST["apps"];
    $c_cont = $_POST['ccount'];
    $s_cont = $_POST['scount'];
    $e_cont = $_POST['ecount'];
    $a_cont = $_POST['acount'];
    $date = date('Y-m-d');

    $query = "UPDATE `skills` SET `clients` = '$clients', `sites`= '$sites', `exps`= '$exps', `apps` = '$apps',, `cl_icon` = '$c_cont', `s_icon` '$s_cont', `ex_icon` '$e_cont', `app_icon` ='$a_cont', `added_on` = '$date') ";

    if (mysqli_query($connect, $query)) {
        $message = 'Counter has been updated Sucessfully.';
    } else {
        $message = 'Sorry Counter has not been updated yet . Due to ' . mysqli_error($connect);
    }
}

if(isset($g_id) && $g_id != ''){
    $sql = "SELECT * FROM `counter` WHERE id = $g_id";
    $res = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($res);
}

?>

<div class="container">
    <h3 class="text-center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">Edit Current Skill</h3>
    <h4 class="text-center" style="color:#FF9E00;"><?php echo $message ?> </h4>

    <form method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="clients">Total Clients</label>
                    <input type="text" name="clients" class="form-control" value="<?php echo $row['clients']; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                <label for="sites">Total Sites</label>
                    <input type="text" name="sites" class="form-control" value="<?php echo $row['sites']; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                <label for="exps">Working Experience</label>
                    <input type="text" name="exps" class="form-control" value="<?php echo $row['exps']; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                <label for="apps">Developed Apps</label>
                    <input type="text" name="apps" class="form-control" value="<?php echo $row['apps']; ?>">
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="clients">Client Count</label>
                    <input type="text" name="ccount" class="form-control" value="<?php echo $row['cl_icon']; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                <label for="sites">Site Count</label>
                    <input type="text" name="scount" class="form-control" value="<?php echo $row['s_icon']; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                <label for="exps">Experience</label>
                    <input type="text" name="ecount" class="form-control" value="<?php echo $row['ex_icon']; ?>">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                <label for="apps">Apps Count</label>
                    <input type="text" name="acount" class="form-control" value="<?php echo $row['app_icon']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mt-4">
                <div class="mx-auto">
                    <input type="submit" name="edit_counter" value="Update Counter" class="btn btn-primary">
                </div>
            </div>
        </div>

    </form>

</div>

<?php include 'footer.php'; ?>