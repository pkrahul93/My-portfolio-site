<?php include 'sidebar.php'; ?>


<?php

session_start();

if (isset($_POST["add_loan"])) {

  $product_name = $_POST["title_name"];

  $target_dir = "slider/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  $query = "INSERT INTO slider (title_name, fileToUpload) VALUES('$product_name', '$target_file')";
  if (mysqli_query($connect, $query)) {
    $message = 'Slider has been added Sucessfully';
  }

  // Check if image file is a actual image or fake image
  // if(isset($_POST["submit"])) {
  //   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  //   if($check !== false) {
  //     echo "File is an image - " . $check["mime"] . ".";
  //     $uploadOk = 1;
  //   } else {
  //     echo "File is not an image.";
  //     $uploadOk = 0;
  //   }
  // }

  // Check if file already exists
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
}

?>






<div>

  <h3 align="center" style="padding-top:60px;">Add New Slider</h3>

  <h4 align="center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

  <form action="#" method="POST" style="width:100%;" enctype="multipart/form-data">



    <div class="modal-body">
      <div class="form-group">
        <input type="text" name="title_name" class="form-control" placeholder="Enter Title">
      </div>







      <div class="">
        <label>Upload Slider image (1920*550) </label>
        <label for="img">Select image:</label>
        <input type="file" id="img" name="fileToUpload" accept="image/*" class="form-control">
      </div>






      <div class="modal-footer">

        <input type="submit" name="add_loan" value="Add Slider" class="btn btn-primary">
      </div>


  </form>

</div>










<?php include 'footer.php'; ?>