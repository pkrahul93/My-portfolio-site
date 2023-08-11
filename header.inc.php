<?php
require 'config.inc.php';

if (!isset($_COOKIE['visit'])) {

    $visit = isset($_COOKIE['visit']) ? $_COOKIE['visit'] : '';
    $visit = mysqli_real_escape_string($connect, $visit);

    setCookie('visit', 'yes', time() + (60 * 60 * 24 * 30));

    mysqli_query($connect, "UPDATE visitors SET total_count = total_count + 1 Where `id` = 1");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Portfolio</title>
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

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html">Kumar Rahul</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span>PHP Websites & Web Applications </span> Developer</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#review">Reviews</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <div class="social-links">
        <a href="https://github.com/pkrahul93" class="github" target="_blank"><i class="bi bi-github"></i></a>
        <a href="https://www.facebook.com/users/pkrahul93" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://www.linkedin.com/in/rahul-kumar-pandey-b3a906210/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header --><?php
