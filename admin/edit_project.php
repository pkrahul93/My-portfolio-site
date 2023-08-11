<?php include 'sidebar.php'; ?>

<?php
$g_id = $_GET['id'];
$message = '';
$msg = '';
if (isset($_POST["edit_project"])) {
  $site = mysqli_real_escape_string($connect,$_POST["site_name"]);
  $category = mysqli_real_escape_string($connect,$_POST["category"]);
  $pdate = mysqli_real_escape_string($connect,$_POST["date"]);
  $purl = mysqli_real_escape_string($connect,$_POST["s_url"]);
  $slug = urlencode($_POST['slug']);
  $filter = mysqli_real_escape_string($connect,$_POST["filter"]);
  $status = mysqli_real_escape_string($connect,$_POST["status"]);

  $file1 = $_FILES["file1"]["name"];
  $target_dir = "upload/";
  $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);

  if($file1 != ''){
    $query = "UPDATE `projects` SET `prj_name` =  '$site', `cat_id` = '$category', `project_date` = '$pdate', `prj_url` = '$purl', `prj_img` ='$target_file1', `filter` = '$filter', `slug` = '$slug',`status` = '$status' WHERE id = '$g_id'";
  }else{
    $query = "UPDATE `projects` SET `prj_name` =  '$site', `cat_id` = '$category', `project_date` = '$pdate', `prj_url` = '$purl', `filter` = '$filter', `slug` = '$slug',`status` = '$status' WHERE id = '$g_id'";
  }
  

  if (mysqli_query($connect, $query)) {
    move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file1);
    $message = 'Project has been updated Sucessfully.';
  } else {
    $message = 'Sorry Project has not been updated yet into database. Due to ' . mysqli_error($connect);
  }

}

if(isset($g_id) && $g_id != ''){
  $sql = "SELECT * FROM projects WHERE id = $g_id";
  $res = mysqli_query($connect, $sql);
  $row = mysqli_fetch_assoc($res);
}
?>

<div class="container">
  <h3 class="text-center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">Edit Current Project</h3>
  <h4 class="text-center" style="color:#FF9E00;"><?php echo $message ?> </h4>

  <form method="POST" style="width:100%;" enctype="multipart/form-data">

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
        <label>Project Name</label>
        <input type="text" name="site_name" class="form-control" value="<?php echo $row['prj_name']; ?>">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
        <label>Project Category</label>
          <select name="category" class="form-control">
          <?php
            $c_id = $row['cat_id'];
            $sqll2 = "SELECT * FROM categories WHERE id = $c_id";
            $ress2 = mysqli_query($connect, $sqll2);
            $ro = mysqli_fetch_assoc($ress2);
            ?>
            <option value="<?php echo $row['cat_id']; ?>" class="form-control">Selected <?php echo $ro['category']; ?></option>

            <?php
            $sql2 = "SELECT * FROM categories WHERE `status` = 1";
            $res2 = mysqli_query($connect, $sql2);
            if(mysqli_num_rows($res2) > 0){
            while($row2 = mysqli_fetch_assoc($res2)){
            ?>
            <option value="<?php echo $row2['id']; ?>" class="form-control"><?php echo $row2['category']; ?></option>
            <?php
                }
            }else{
                echo "No Record Found.";
            }
            ?>
          
          </select>
        </div>
      </div>
    
      <div class="col-lg-6">
        <div class="form-group">
        <label>Project Site URL</label>
          <input type="text" name="s_url" class="form-control" value="<?php echo $row['prj_url']; ?>">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
        <label>Project Slug</label>
          <input type="text" name="slug" class="form-control" value="<?php echo $row['slug']; ?>" placeholder="Project Slug">
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
        <div class="form-control">
          <label>Upload Project Image </label>
          <input type="file" name="file1" accept="image/*" class="form-control">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card" style="background: transparent;padding:8px;">
          <img src="<?php echo $base_url; ?><?php echo $row['prj_img']; ?>" alt="site_pic" class="img-fluid" style="height: 150px;border-radius:6px;margin: auto;">
        </div>
      </div>
    </div>
    
    <div class="row mb-4">
      <div class="col-lg-4">
        <div class="form-group">
        <label>Project Complition Date</label>
          <input type="date" name="date" class="form-control" value="<?php echo $row['project_date']; ?>">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
            <label>Project Status</label>
          <select name="status" class="form-control">
            <option value="<?php echo $row['status']; ?>" class="form-control">
            <?php 
            if($row['status'] == 1){
                echo "Active"; 
            }else{
                echo "Deactive"; 
            }
            ?>
            </option>
            <option value="1">Active</option>
            <option value="0">Deactive</option>
          </select>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
        <label>Project Filter Class</label>
          <select name="filter" class="form-control">
            <option value="<?php echo $row['filter']; ?>" class="form-control">Selected <?php echo $row['filter']; ?></option>
            <option value="filter-front" class="form-control">Filter-front</option>
            <option value="filter-blog" class="form-control">Filter-blog</option>
            <option value="filter-service" class="form-control">Filter-service</option>
            <option value="filter-cms" class="form-control">Filter-cms</option>
            <option value="filter-matrimonial" class="form-control">Filter-matrimonial</option>
            <option value="filter-ecom" class="form-control">Filter-ecom</option>
            <option value="filter-charity" class="form-control">Filter-charity</option>
            <option value="filter-msys" class="form-control">Filter-msys</option>
            <option value="filter-mlms" class="form-control">Filter-mlms</option>
            <option value="filter-other" class="form-control">Filter-others</option>
          </select>
        </div>
      </div>
      
      <div class="col-lg-12 mt-4">
        <div class="mx-auto">
          <input type="submit" name="edit_project" value="Update Project Details" class="btn btn-primary">
        </div>
      </div>
    </div>

  </form>

</div>

<?php include 'footer.php'; ?>