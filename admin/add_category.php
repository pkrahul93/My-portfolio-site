<?php include 'sidebar.php'; ?>

<?php

$message = '';
$msg = '';
if (isset($_POST["add_port"])) {
  $site = $_POST["cat_name"];
  $status = $_POST["status"];

  $query = "INSERT INTO `categories` (`id`, `category`, `status`) VALUES (NULL, '$site', '$status');";

  if (mysqli_query($connect, $query)) {
    $message = 'Category has been added Sucessfully';
  } else {
    $message = 'Sorry Category has not been added yet into database. Due to ' . mysqli_error($connect);
  }

}

?>

<div class="container">
  <h3 class="text-center" style="padding-top:60px;">Add New Category</h3>
  <h4 class="text-center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

  <form method="POST" style="width:100%;">

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <input type="text" name="cat_name" class="form-control" placeholder="Category Name">
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="form-group">
          <select name="status" class="form-control">
            <option value="Selected disabled" class="form-control">Select Status</option>
            <option value="1" class="form-control">Active</option>
            <option value="0" class="form-control">Deactive</option>
          </select>
        </div>
      </div>
      
      <div class="col-lg-12 mt-4">
        <div class="mx-auto">
          <input type="submit" name="add_cat" value="Add Category" class="btn btn-primary">
        </div>
      </div>
    </div>

  </form>

</div>

<?php include 'footer.php'; ?>