<?php include 'sidebar.php'; ?>

<?php
$g_id = $_GET['id'];
$message = '';
$msg = '';
if (isset($_POST["edit_cat"])) {
  $site = $_POST["cat_name"];
  $status = $_POST["status"];

  $query = "UPDATE `categories` SET `category` = '$site', `status` = '$status' WHERE id = '$g_id' ";

  if (mysqli_query($connect, $query)) {
    $message = 'Category has been added Sucessfully';
  } else {
    $message = 'Sorry Category has not been added yet into database. Due to ' . mysqli_error($connect);
  }

}

if(isset($g_id) && $g_id != ''){
  $sql = "SELECT * FROM categories WHERE id = $g_id";
  $res = mysqli_query($connect, $sql);
  $row = mysqli_fetch_assoc($res);
}

?>

<div class="container">
  <h3 class="text-center" style="padding-top:60px;">Update Current Category</h3>
  <h4 class="text-center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

  <form method="POST" style="width:100%;">

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category']; ?>">
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="form-group">
          <select name="status" class="form-control">
            <option value="Selected disabled" class="form-control">Selected 
              <?php 
              if($row['status'] == 1){
                echo "Active";
              }else{
                echo "Deactive"; 
              }
              ?>
            </option>
            <option value="1" class="form-control">Active</option>
            <option value="0" class="form-control">Deactive</option>
          </select>
        </div>
      </div>
      
      <div class="col-lg-12 mt-4">
        <div class="mx-auto">
          <input type="submit" name="edit_cat" value="Update Category" class="btn btn-primary">
        </div>
      </div>
    </div>

  </form>

</div>

<?php include 'footer.php'; ?>