<?php
session_start();
require ('functions.inc.php');
require ('../config.inc.php');

if (isset($_SESSION['ADMIN_LOGIN']) && ($_SESSION['ADMIN_LOGIN'] != '')) {

} else {
    header('location:index.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/fav.png">
  <link rel="icon" type="image/png" href="assets/img/fav.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="../admin/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=8r14yz8oyfc6f1kdd2tcfsvv41u8tjuj5kz1r5sklun1gw21"></script>
  <script type="text/javascript">
    tinymce.init({
      selector: 'textarea',
      height: 100,
      width: '100%',
      theme: 'modern',
      plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
      toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
      image_advtab: true,
      images_upload_url: '/uploads',
      automatic_uploads: false,

      relative_urls: false,
      remove_script_host: false,
      document_base_url: "{{ asset('/') }}",

      images_upload_handler: function(blobInfo, success, failure) {
        var xhr, formData;

        xhr = new XMLHttpRequest();

        xhr.withCredentials = false;
        xhr.open('POST', '/upload');

        var metas = document.getElementsByTagName('meta');
        for (i = 0; i < metas.length; i++) {
          if (metas[i].getAttribute("name") == "csrf-token") {
            xhr.setRequestHeader("X-CSRF-Token", metas[i].getAttribute("content"));
          }
        }

        xhr.onload = function() {
          var json;

          if (xhr.status != 200) {
            failure('HTTP Error: ' + xhr.status);
            return;
          }

          json = JSON.parse(xhr.responseText);

          if (!json || typeof json.file_path != 'string') {
            failure('Invalid JSON: ' + xhr.responseText);
            return;
          }
          // alert($temp['name']);
          success('storage/' + json.file_path);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        // alert(blobInfo.blob());
        xhr.send(formData);
      },


      setup: function(editor) {
        editor.on('change', function() {
          tinymce.triggerSave();
        });
      }

    });
  </script>

</head>


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="../admin/assets/img/sidebar-1.jpg">
    
      <div class="logo" style="background: #000;">
        <a href="dashboard.php" class="simple-text logo-normal">
          <img src="assets/img/logo11.png" style="width:175px;height:75px;">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <!-- <li class="nav-item active"><a class="nav-link" href="home.php"><i class="fa fa-list"></i><span>Home</span></a></li> -->
          <!-- <br> -->
          <li class="nav-item active"><a class="nav-link" href="projects.php"><i class="fa fa-list"></i><span>Projects</span></a></li>
          <!-- <br> -->
          <li class="nav-item "><a class="nav-link" href="categories.php"><i class="fa fa-shield"></i><span>Categories</span></a></li>
          <!-- <br> -->
          <li class="nav-item "><a class="nav-link" href="reviews.php"><i class="fa fa-bell"></i><span>Reviews</span></a></li>
          
          <li class="nav-item   "><a class="nav-link" href="enquiries.php"><i class="fa fa-users"></i><span>Enquiries</span></a></li>
          <!-- <br> -->
          <li class="nav-item   "><a class="nav-link" href="offers.php"><i class="fa fa-shopping-cart"></i><span>Offers</span></a></li>
          <!-- <br> -->
          <li class="nav-item "><a class="nav-link" href="counters.php"><i class="fa fa-credit-card"></i><span>Counters</span></a></li>
          <!-- <br> -->
          <li class="nav-item "><a class="nav-link" href="services.php"><i class="fa fa-newspaper-o"></i><span>Services</span></a></li>
          <!-- <br> -->
          <li class="nav-item "><a class="nav-link" href="portfolio.php"><i class="fa fa-credit-card"></i><span></span>Portfolios</a></li>
          <!-- <br> -->
          <li class="nav-item "><a class="nav-link" href="skills.php"><i class="fa fa-info"></i><span>Skills</span></a></li>
          <!-- <br> -->
          <li class="nav-item "><a class="nav-link" href="contact.php"><i class="fa fa-phone"></i><span>Contact Us</span></a></li>
          <!-- <br> -->
          <li class="nav-item "><a class="nav-link" href="logout.php"><i class="fa fa-bell"></i><span>Logout</span></a></li>
          <br>



        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" style="background-color:#00bcd4 !important;">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">CMS</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">

            <ul class="navbar-nav">


              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">


                  <a class="dropdown-item" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- End Navbar -->