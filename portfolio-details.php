<?php
require('config.inc.php');

$prj = urlencode($_GET['pid']);
$sql = "SELECT * FROM `portfolios` WHERE `slug` = '$prj'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Portfolio | Project Details</title>
  <meta content="A PHP Websites, Web applications and MLM Softwares Developer" name="description">
  <meta content="Front-End developer,Backend Developer, Php Developer, Laravel Developer, Codeigniter Developer" name="keywords">

  <link href="assets/img/fav.png" rel="icon">
  <link href="assets/img/ati.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

    <style>
        @media(max-width:600px){
            .swiper-slide img{
                width:295px !important;
                height:175px !important;
            }
        }
    </style>
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">Details of Project <?php echo $row['site_name']; ?></h2>

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?php echo $base_url; ?><?php echo $row['img1']; ?>" alt="<?php echo $row['site_name']; ?>1" style="height: 420px;width:600px;display: block;padding: 5px;margin: auto;">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo $base_url; ?><?php echo $row['img2']; ?>" alt="<?php echo $row['site_name']; ?>2" style="height: 420px;width:600px;display: block;padding: 5px;margin: auto;">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo $base_url; ?><?php echo $row['img3']; ?>" alt="<?php echo $row['site_name']; ?>3" style="height: 420px;width:600px;display: block;padding: 5px;margin: auto;">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Project information</h3>
            <hr>
            <ul>
              <li><strong>Category </strong>: 
              <?php
                    // $url = $row['url'];
                    // $rl = str_replace("https://www.","",$url);
                    $cat = $row['cat_id'];
                    $sqll2 = "SELECT * FROM categories WHERE id = $cat";
                    $ress2 = mysqli_query($connect, $sqll2);
                    $ro = mysqli_fetch_array($ress2);
                    ?>
                    <?php echo $ro['category']; ?>
            </li>
              <li><strong>Client </strong>: <?php echo $row['client']; ?></li>
              <li><strong>Project date </strong>: <?php echo $row['project_date']; ?></li>
              <li><strong>Project URL </strong>: <a href="<?php echo $row['url']; ?>" target="_blank">👉 Click For Visit 👆</a></li>
            </ul>

            <hr>
            <p>
                <?php echo $row['about_site']; ?>
            </p>
          </div>

        </div>

      </div>
    </div>
    <!-- End Portfolio Details -->

  </main>
  <!-- End #main -->

  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>