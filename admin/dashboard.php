<?php include 'sidebar.php';?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-sitemap"></i>
                  </div>
                  <?php
                  $total_services = mysqli_num_rows(mysqli_query($connect,"Select * From `services` Where `status` = 1"));
                  ?>
                  <p class="card-category">Services</p>
                  <h3 class="card-title">
                    <?= $total_services ?>+
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated    
                  </div>
                </div>
              </div>
            </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-list"></i>
                  </div>
                  <?php
                  $total_projects = mysqli_num_rows(mysqli_query($connect,"Select * From `portfolios` Where `status` = 1"));
                  ?>
                  <p class="card-category">Projects</p>
                  <h3 class="card-title">
                    <?= $total_projects ?>+
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    All Portfolios
                  </div>
                </div>
              </div>
            </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-mortar-board"></i>
                  </div>
                  <?php
                  $total_skill = mysqli_num_rows(mysqli_query($connect,"Select * From `skills`"));
                  ?>
                  <p class="card-category">Skills</p>
                  <h3 class="card-title">
                  <?= $total_skill ?>+
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <?php
                    $csql = "SELECT * FROM `visitors`";
                    $cres = mysqli_fetch_assoc(mysqli_query($connect, $csql));
                    
                    if ($cres != '') {
                        $counter = $cres['total_count'];
                    } else {  
                        $counter = 0;
                    }
                    ?>
                  <p class="card-category">Visitors</p>
                  <h3 class="card-title"><?php echo $counter ?>+</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
<img src="assets/img/city2.jpg" style="width:100%;height:27rem;">

<?php include 'footer.php';?>