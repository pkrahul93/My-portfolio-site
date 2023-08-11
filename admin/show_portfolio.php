<?php include 'sidebar.php'; ?>

<?php
$g_id = $_GET['id'];

if(isset($g_id) && $g_id != ''){
  $sql = "SELECT * FROM portfolios WHERE id = $g_id";
  $res = mysqli_query($connect, $sql);
  $row = mysqli_fetch_assoc($res);
}
?>

<div class="container">
  <h3 class="text-center" style="padding-top:60px;">View Current Portfolio</h3>
  <h4 class="text-center" style="color:#FF9E00;"><?php echo $message . $msg; ?> </h4>

  <form method="POST" style="width:100%;" enctype="multipart/form-data">

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <input type="text" name="site_name" class="form-control" value="<?php echo $row['site_name']; ?>" disabled>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <select name="category" class="form-control" disabled>
          <?php
            $sqll2 = "SELECT * FROM categories WHERE `status` = 1";
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
          <input type="text" name="client" class="form-control" value="<?php echo $row['client']; ?>" disabled>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <input type="text" name="s_url" class="form-control" value="<?php echo $row['url']; ?>" disabled>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card" style="background: transparent;padding:8px;">
          <img src="<?php echo $base_url; ?><?php echo $row['img1']; ?>" alt="site_pic" class="img-fluid" style="width: 100%;height: 150px;border-radius:6px;margin: auto;">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="background: transparent;padding:8px;">
          <img src="<?php echo $base_url; ?><?php echo $row['img2']; ?>" alt="site_pic1" class="img-fluid" style="width: 100%;height: 150px;border-radius:6px;margin: auto;">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="background: transparent;padding:8px;">
          <img src="<?php echo $base_url; ?><?php echo $row['img3']; ?>" alt="site_pic2" class="img-fluid" style="width: 100%;height: 150px;border-radius:6px;margin: auto;">
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-lg-4">
        <div class="form-control">
          <label>Upload Project Image1 (upload 340*240)</label>
          <input type="file" name="file1" accept="image/*" class="form-control" disabled>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-control">
          <label>Upload Project Image2 (upload 340*240)</label>
          <input type="file" name="file2" accept="image/*" class="form-control" disabled>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-control">
          <label>Upload Project Image3 (upload 340*240)</label>
          <input type="file" name="file3" accept="image/*" class="form-control" disabled>
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-lg-4">
        <div class="form-group">
          <input type="date" name="date" class="form-control" value="<?php echo $row['project_date']; ?>" disabled>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
        <?php
        if($row['status'] == 1){
            $status = "Active";
        }else{
            $status = "In-Active";
        }
        ?>
          <select name="category" class="form-control" disabled>
            <option value="<?php echo $row['status']; ?>" class="form-control"><?php echo $status ?></option>
            <option value="1">Active</option>
            <option value="0">Deactive</option>
          </select>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <select name="filter" class="form-control" disabled>
            <option value="<?php echo $row['filter']; ?>" class="form-control"><?php echo $row['filter']; ?></option>
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
          <textarea type="text" name="content" class="form-control" disabled><?php echo $row['about_site']; ?></textarea>
        </div>
      </div>
      
    </div>

  </form>

</div>

<?php include 'footer.php'; ?>