<?php include 'sidebar.php'; ?>

<?php
    $ht_id = $_REQUEST['id'];
    
    $sql = "SELECT * FROM `clients` WHERE id ='$ht_id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
?>

<?php


if (isset($_POST["udate_client"])) {

    $name = $_POST['name'];
    $adds = $_POST['adds'];
    $qualify = $_POST['edu'];
    $content = $_POST['abt'];
    $filename = $_FILES["pics"]["name"];
    $tempname = $_FILES["pics"]["tmp_name"];
    $folder = "client_logo/" . $filename;
    move_uploaded_file($tempname, $folder);

    $c_update = "update clients set client_name='$name', client_pic='$folder', client_adds='$adds', qualification_='$qualify', content='$content' where id ='$ht_id'";

    $run_update = mysqli_query($connect, $c_update);

    if ($run_update == TRUE) {
        $message = "Updated Successfully";
    }
}else{
    $message = "**.....Client Update Peocess Not Yet Complited.....**";
}

?>

<div>

    <h3 align="center" style="padding-top:60px;">Update Clients</h3>

    <h4 align="center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

    <form action="#" method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="mb-3">
                <label>Upload Client Image (upload 400*400)</label>
                <img src="http://localhost/Ontech/admin/<?php echo $row['client_pic']; ?>" style="width:250px;">
                <input type="file" id="pic" name="pics" accept="image/*" class="form-control form-control-sm" >
            </div>

            <div class="form-group">
                <?php

                $sql = "SELECT * FROM `clients` where id ='$ht_id'";
                $result = mysqli_query($connect, $sql);
                $row = mysqli_fetch_array($result);

                ?>
    
                <div class="form-group">
                    <label>Name :</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['client_name']; ?>">
                </div>

                <div class="form-group">
                <label>Client Address :</label>
                    <input type="text" class="form-control" name="adds" value="<?php echo $row['client_adds']; ?>">
                </div>

                <div class="form-group">
                    <label>Client Qualification :</label>
                    <input type="text" class="form-control" name="edu" value="<?php echo $row['qualification_']; ?>">
                </div>

                <div class="form-group">
                    <label>About Client :</label>
                    <textarea class="form-control" name="abt" cols="25" rows="4" placeholder="<?php echo $row['content']; ?>" style="color:#000;"></textarea>
                </div>

            </div>

            <div class="modal-footer">
                <input type="submit" name="udate_client" value="Update Category" class="btn btn-primary">
            </div>
        </div>


    </form>

</div>










<?php include 'footer.php'; ?>