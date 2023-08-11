<?php include 'sidebar.php'; ?>


<?php





session_start();

if (isset($_POST["add_loan"])) {




  $product_name = $_POST["logo_title"];

  $file = $_FILES["fileToUpload"]["name"];
  $target_dir = "client_logo/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


  $query = "INSERT INTO  clients_logo (logo_title, fileToUpload) VALUES('$product_name', '$file')";
  if (mysqli_query($connect, $query)) {
    $message = 'Logo has been added Sucessfully';
  }


  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

}else{
  $message = 'Logo has not been added Yet.';
}

?>

<div>

  <h3 align="center" style="padding-top:60px;">Add Client Logo</h3>

  <h4 align="center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

  <form action="#" method="POST" style="width:100%;" enctype="multipart/form-data">



    <div class="modal-body">
      <div class="form-group">
        <input type="text" name="logo_title" class="form-control" placeholder="Enter Title">
      </div>

      <div class="">
        <label>Upload Product image (upload 100*80)</label>

        <input type="file" id="img" name="fileToUpload" accept="image/*" class="form-control">
      </div>

      <div class="modal-footer">

        <input type="submit" name="add_loan" value="Add" class="btn btn-primary">
      </div>


  </form>

</div>


<?php include 'footer.php'; ?>