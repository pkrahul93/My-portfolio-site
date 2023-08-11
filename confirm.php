<?php 
$user = $_GET['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Confirmation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="confirmation Message" class="portfolio-details">
      <div class="container" style="position:relative;top:3rem;">

        <div class="row" style="padding:20px;">

          <div class="col-sm-12">

            <h1 style="padding:29px 0;color:#fff;font-weight:700;text-align:center;font-size:2rem;">!!...THANK YOU...!!</h1>
            <p style="padding:5px 0;color:blue;font-weight:800;text-align:center;font-size:1.6rem;">Mr/Miss. <?php echo $user; ?></p>
            <h3 style="padding:10px 0px;color:green;font-weight:700;text-align:center;font-size:40px;">Your Enquiry Has Been Sent Successfully.</h3>
            <h3 style="padding:15px 0px;color:#fff;font-weight:700;text-align:center;"> I Will Contact You Soon within 3 Working Days. </h3>

          </div>

          <div class="col p-4 my-4" style="display:flex;justify-content:center;">

            <input type="button" class="btn btn-success text-white" value="Back To Homepage" style="margin:4px;padding:10px;font-size:22px;border-radius:30px;font-weight:700;width:250px;" onclick="funnpg()">

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
  <script src="assets/js/main.js"></script>
  <script>
    function funnpg(){
        window.location.href='index.php';
    }  
  </script>

</body>

</html>