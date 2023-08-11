<?php include 'sidebar.php'; ?>

<?php

session_start();

if (isset($_POST["add_client"])) {

    $name = $_POST["name"];
    $ads = $_POST["ads"];
    $post = $_POST["post"];
    $abt = $_POST["abt"];

    $file = $_FILES["pic"]["name"];
    $target_dir = "client_logo/";
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    $query = "INSERT INTO  clients (client_name,client_pic,client_adds,qualification_,content) VALUES('$name','$target_file','$ads','$post','$abt')";
    if (mysqli_query($connect, $query)) {
        $message = 'Client has been added Sucessfully';
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["pic"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["pic"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    $message = 'Client has not been added Yet.';
}

?>

<div>

    <h3 align="center" style="padding-top:60px;">Add Client Logo</h3>

    <h4 align="center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

    <form action="#" method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="modal-body">
            <div class="form-group">
                <label>Client Name :</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="">
                <label>Upload Client image (upload 400*400) :</label>
                <input type="file" id="img" name="pic" accept="image/*" class="form-control">
            </div>

            <div class="form-group">
                <label>Address :</label>
                <input type="text" name="ads" class="form-control">
            </div>

            <div class="form-group">
                <label>Post/Qualification :</label>
                <input type="text" name="post" class="form-control">
            </div>

            <div class="form-group">
                <label>About Client :</label>
                <textarea class="form-control" name="abt" cols="25" rows="4" style="color:#000;"></textarea>
            </div>

            <div class="modal-footer">

                <input type="submit" name="add_client" value="Add" class="btn btn-primary">
            </div>


    </form>

</div>


<?php include 'footer.php'; ?>