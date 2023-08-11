<?php include 'sidebar.php'; ?>

<?php
$m_id = $_REQUEST['id'];

$sql = "SELECT * FROM `members` WHERE id ='$m_id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
?>

<?php


if (isset($_POST["udate_member"])) {

    $name = $_POST["name"];
    $post = $_POST["post"];
    $tw = $_POST["twt"];
    $fb = $_POST["fbk"];
    $lnk = $_POST["lnk"];
    $in = $_POST["insta"];
    $date = date('Y-m-d');

    $filename = $_FILES["icon"]["name"];
    $tempname = $_FILES["icon"]["tmp_name"];
    $folder = "Team/" . $filename;
    move_uploaded_file($tempname, $folder);

    $c_update = "update members set pics='$folder', name_='$name', post='$post', twt='$tw', fbk='$fb', lnk='$lnk', insta='$in', added_on='$date' where id ='$m_id'";

    $run_update = mysqli_query($connect, $c_update);

    if ($run_update == TRUE) {
        $message = "Team Member Information Updated Successfully";
    }
} else {
    $message = "**.....Updation Peocess Still in Process.....**";
}

?>

<div>

    <h3 align="center" style="padding-top:60px;">Update Team Member Information</h3>

    <h4 align="center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

    <form action="#" method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="mb-3">
                <label>Upload Image (600*600)</label>
                <img src="http://localhost/Ontech/admin/<?php echo $row['pics']; ?>" style="width:100px;">
                <input type="file" id="pic" name="icon" accept="image/*" class="form-control form-control-sm">
            </div>

            <div class="form-group">
                <?php

                $sql = "SELECT * FROM `members` where id ='$m_id'";
                $result = mysqli_query($connect, $sql);
                $row = mysqli_fetch_array($result);

                ?>
                <div class="form-group">
                    <label>Member-ID :</label>
                    <input type="text" class="form-control" value="<?php echo $row['id']; ?>">
                </div>

                <div class="form-group">
                    <label>Member Name :</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name_']; ?>">
                </div>

                <div class="form-group">
                    <label>Post On Which He/She is working :</label>
                    <input type="text" name="post" class="form-control" value="<?php echo $row['post']; ?>">
                </div>

                <div class="form-group">
                    <label>Tweeter Account Address :</label>
                    <input type="text" name="twt" class="form-control" value="<?php echo $row['twt']; ?>">
                </div>

                <div class="form-group">
                    <label>Facebook Account Address :</label>
                    <input type="text" name="fbk" class="form-control" value="<?php echo $row['fbk']; ?>">
                </div>

                <div class="form-group">
                    <label>Linkdean Account Address :</label>
                    <input type="text" name="lnk" class="form-control" value="<?php echo $row['lnk']; ?>">
                </div>

                <div class="form-group">
                    <label>Instagram Account Address :</label>
                    <input type="text" name="insta" class="form-control" value="<?php echo $row['insta']; ?>">
                </div>

            </div>

            <div class="modal-footer">
                <input type="submit" name="udate_member" value="Update" class="btn btn-primary">
            </div>
        </div>


    </form>

</div>










<?php include 'footer.php'; ?>