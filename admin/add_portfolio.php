<?php include 'sidebar.php'; ?>

<?php

$message = '';
$msg = '';
if (isset($_POST["add_port"])) {
  $site = mysqli_real_escape_string($connect,$_POST["site_name"]);
  $category = mysqli_real_escape_string($connect,$_POST["category"]);
  $client = mysqli_real_escape_string($connect,$_POST["client"]);
  $pdate = mysqli_real_escape_string($connect,$_POST["date"]);
  $purl = mysqli_real_escape_string($connect,$_POST["s_url"]);
  $slug = urlencode($_POST['slug']);
  $content1 = mysqli_real_escape_string($connect,$_POST["content"]);
  $content = str_replace("'","/",$content1);
  $filter = mysqli_real_escape_string($connect,$_POST["filter"]);
  $status = mysqli_real_escape_string($connect,$_POST["status"]);

  $file = $_FILES["file1"]["name"];
  $target_dir = "upload/";
  $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);

  $file = $_FILES["file2"]["name"];
  $target_dir = "upload/";
  $target_file2 = $target_dir . basename($_FILES["file2"]["name"]);

  $file = $_FILES["file3"]["name"];
  $target_dir = "upload/";
  $target_file3 = $target_dir . basename($_FILES["file3"]["name"]);

  $query = "INSERT INTO `portfolios` (`id`, `site_name`, `cat_id`, `client`, `project_date`, `url`, `about_site`, `img1`, `img2`, `img3`, `filter`,`slug`,`status`) VALUES (NULL, '$site', '$category', '$client', '$pdate', '$purl', '$content', '$target_file1', '$target_file2', '$target_file3', '$filter','$slug', '$status');";

  if (mysqli_query($connect, $query)) {
    move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file2);
    move_uploaded_file($_FILES["file3"]["tmp_name"], $target_file3);
    $message = 'Portfolio has been added Sucessfully';
  } else {
    $message = 'Sorry Portfolio has not been added yet into database. Due to ' . mysqli_error($connect);
  }

}

?>

<div class="container">
  <h3 class="text-center" style="padding-top:60px;">Add New Portfolio</h3>
  <h4 class="text-center" style="color:#FF9E00;"><?php echo $message . $msg; ?> </h4>

  <form method="POST" style="width:100%;" enctype="multipart/form-data">

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <input type="text" name="site_name" class="form-control" placeholder="Project Name">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <select name="category" class="form-control">
                <option value="Selected disabled" class="form-control">Select Category</option>
                
                <?php
                $sql2 = "SELECT * FROM categories WHERE `status` = 1";
                $res2 = mysqli_query($connect, $sql2);
                if(mysqli_num_rows($res2) > 0){
                while($row2 = mysqli_fetch_assoc($res2)){
                ?>
                <option value="<?php echo $row2['id']; ?>" class="form-control"><?php echo $row2['id']; ?> . <?php echo $row2['category']; ?></option>
                <?php
                    }
                }else{
                    echo "No Record Found.";
                }
                ?>
            </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="slug" class="form-control" placeholder="Project Slug">
            </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <input type="text" name="client" class="form-control" placeholder="Client Name">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <input type="text" name="s_url" class="form-control" placeholder="Site URL">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card" style="background: transparent;padding:8px;">
          <img src="client_logo/about.jpg" alt="site_pic" class="img-fluid" style="width: 100%;height: 150px;border-radius:6px;margin: auto;">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="background: transparent;padding:8px;">
          <img src="client_logo/about.jpg" alt="site_pic1" class="img-fluid" style="width: 100%;height: 150px;border-radius:6px;margin: auto;">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="background: transparent;padding:8px;">
          <img src="client_logo/about.jpg" alt="site_pic2" class="img-fluid" style="width: 100%;height: 150px;border-radius:6px;margin: auto;">
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-lg-4">
        <div class="form-control">
          <label>Upload Project Image1 (upload 340*240)</label>
          <input type="file" name="file1" accept="image/*" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-control">
          <label>Upload Project Image2 (upload 340*240)</label>
          <input type="file" name="file2" accept="image/*" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-control">
          <label>Upload Project Image3 (upload 340*240)</label>
          <input type="file" name="file3" accept="image/*" class="form-control">
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-lg-4">
        <div class="form-group">
          <input type="date" name="date" class="form-control" placeholder="Project Complition Date">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <select name="category" class="form-control">
            <option value="Selected disabled" class="form-control">Select Status</option>
            <option value="1" class="form-control">Active</option>
            <option value="0" class="form-control">Deactive</option>
          </select>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <select name="filter" class="form-control">
            <option value="Selected disabled" class="form-control">Select Filter Class</option>
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
      <div class="col-lg-12">
        <div class="form-group">
          <textarea type="text" name="content" class="form-control">Site Description </textarea>
        </div>
      </div>
      <div class="col-lg-12 mt-4">
        <div class="mx-auto">
          <input type="submit" name="add_port" value="Add Potfolio" class="btn btn-primary">
        </div>
      </div>
    </div>

  </form>

</div>

<?php include 'footer.php'; ?>