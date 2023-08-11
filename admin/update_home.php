<?php include 'sidebar.php'; ?>

<?php
    $sql = "SELECT * FROM `home` ";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
?>

<?php

$h_id = $_REQUEST['id'];

if (isset($_POST["udate_dtl"])) {

    $msg = $_POST['msg'];
    $abt = $_POST['abt'];
    $vis = $_POST['vis'];
    $mis = $_POST['mis'];
    // $date = date('Y-m-d');
    $filename = $_FILES["pics"]["name"];
    $tempname = $_FILES["pics"]["tmp_name"];
    $folder = "upload/" . $filename;
    move_uploaded_file($tempname, $folder);

    $c_update = "update home set banner='$folder', message='$msg', about='$abt', vision='$vis', mision='$mis' where id='$h_id'";

    $run_update = mysqli_query($connect, $c_update);

    if ($run_update == TRUE) {
        $message = "Updated Successfully";
    }
}else{
    $message = "**.....Update Your Homepage.....**";
}

?>

<div>

    <h3 align="center" style="padding-top:60px;">Update Home/About</h3>

    <h4 align="center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

    <form action="#" method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="mb-3">
                <label>Upload Banner Image (upload 1920*827)</label>
                <img src="http://localhost/Ontech/admin/<?php echo $row['banner']; ?>" style="width:250px;">
                <input type="file" id="pic" name="pics" accept="image/*" class="form-control form-control-sm" >
            </div>

            <div class="form-group">
                <?php

                $sql = "SELECT * FROM `home` where id ='$h_id'";
                $result = mysqli_query($connect, $sql);
                $row = mysqli_fetch_array($result);

                ?>
    
                <div class="form-group">
                    <label>Message :</label>
                    <textarea class="form-control" name="msg" cols="25" rows="4" placeholder="<?php echo $row['message']; ?>" style="color:#000;"></textarea>
                </div>

                <div class="form-group">
                <label>Message :</label>
                    <textarea class="form-control" name="msg" cols="25" rows="4" placeholder="<?php echo $row['about']; ?>" style="color:#000;"></textarea>
                </div>

                <div class="form-group">
                    <label>Vision :</label>
                    <textarea class="form-control" name="msg" cols="25" rows="4" placeholder="<?php echo $row['vision']; ?>" style="color:#000;"></textarea>
                </div>

                <div class="form-group">
                    <label>Mission :</label>
                    <textarea class="form-control" name="msg" cols="25" rows="4" placeholder="<?php echo $row['mision']; ?>" style="color:#000;"></textarea>
                </div>

            </div>

            <div class="modal-footer">
                <input type="submit" name="udate_dtl" value="Update Category" class="btn btn-primary">
            </div>
        </div>


    </form>

</div>










<?php include 'footer.php'; ?>