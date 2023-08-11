<?php include 'sidebar.php'; ?>

<?php

session_start();

if (isset($_POST["add_member"])) {

    $name = $_POST["name"];
    $post = $_POST["post"];
    $tw = $_POST["twt"];
    $fb = $_POST["fbk"];
    $lnk = $_POST["lnk"];
    $in = $_POST["insta"];
    $date = date('Y-m-d');

    $file = $_FILES["icon"]["name"];
    $target_dir = "Team/";
    $target_file = $target_dir . basename($_FILES["icon"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    $query = "INSERT INTO  members (pics, name_, post, twt, fbk, lnk, insta, added_on) VALUES ('$target_file','$name','$post','$tw','$fb','$lnk','$in','$date')";
    if (mysqli_query($connect, $query)) {
        $message = 'Team Member has been added Sucessfully';
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["icon"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["icon"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    $message = 'Team Member has not been added Yet.';
}

?>

<div>

    <h3 align="center" style="padding-top:60px;">Add Member</h3>

    <h4 align="center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

    <form action="#" method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="modal-body">
            <div class="form-group">
                <label>Name :</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="">
                <label>Upload Image (600*600) :</label>
                <input type="file" id="img" name="icon" accept="image/*" class="form-control">
            </div>

            <div class="form-group">
                <label>Post On Which He/She is working :</label>
                <input type="text" name="post" class="form-control">
            </div>

            <div class="form-group">
                <label>Tweeter Account Address :</label>
                <input type="text" name="twt" class="form-control">
            </div>

            <div class="form-group">
                <label>Facebook Account Address :</label>
                <input type="text" name="fbk" class="form-control">
            </div>

            <div class="form-group">
                <label>Linkdean Account Address :</label>
                <input type="text" name="lnk" class="form-control">
            </div>

            <div class="form-group">
                <label>Instagram Account Address :</label>
                <input type="text" name="insta" class="form-control">
            </div>

            <div class="modal-footer">

                <input type="submit" name="add_member" value="Add" class="btn btn-primary">
            </div>


    </form>

</div>


<?php include 'footer.php'; ?>