<?php require 'header.inc.php';?>

<!-- ======= About Section ======= -->
<section id="about" class="about">

  <!-- ======= About Me ======= -->
  <div class="about-me container">

    <div class="section-title">
      <h2>About</h2>
      <p>Know more about me</p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="assets/img/r4.jpg" class="img-fluid" alt="Loading" style="height:445px;width:500px;">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>Web App Disigner &amp; Full Stack Website Developer</h3>
        <p class="fst-italic">
          I have completed my B.Tech in Computer Science & Engineering with 8.0 CGPA in year 2021 from GGSESTC (Guru Gobind Singh Educational Society & Technical Campus) Kandra, Bokaro, Jharkhand, India. This institue is affliated by Binova Bhave University Hazaribag, Jharkhand. <br>Web page Desigening and Singing are my favoiurate hobbies.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday :</strong> <span>11 March 1993</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Website :</strong> <span>www.example.com</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone :</strong> <span>+91 91234 29191</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City :</strong> <span>Ranhala, Uttam Nagar, New Delhi</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <?php
$a = 1993;
$b = date('Y');
$yr = $b - $a;
?>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age :</strong> <span><?php echo $yr; ?> Years</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Degree :</strong> <span>B.Tech (In C.S.E) </span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email :</strong> <span>pkrahul93@gmail.com</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Freelancing :</strong> <span>Available</span></li>
            </ul>
          </div>
        </div>
        <p>
          I have basic command on Windows and Linux operating systems. I have designed approx 30+ websites and web applications using these technologies as.... <br>Frontend : HTML, CSS, JavaScript, jQuary, Bootstrap, AJAX <br>Backend : Core PHP/PHP, Laravel, Codeigniter <br>Database Management : MYSQL <br>APIs : Rest API Integrtion <br>Payment Gateway : Razorpay, Paypal and so on..<br>For exploring my hands on project you can visit my portfolio where you can get every details related to my projects seperately.
        </p>
      </div>
    </div>

  </div><!-- End About Me -->

  <!-- ======= Counts ======= -->
  <div class="counts container">

    <div class="row">
      <?php
$sql = "SELECT * FROM `counter`";
$resu = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($resu);
?>
      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <?php echo $row['cl_icon']; ?>
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $row['clients']; ?>" data-purecounter-duration="1" class="purecounter"><?php echo $row['clients']; ?> +</span>
          <p>Happy Clients</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <?php echo $row['s_icon']; ?>
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $row['sites']; ?>" data-purecounter-duration="1" class="purecounter"><?php echo $row['sites']; ?> +</span>
          <p>Websites</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <?php echo $row['ex_icon']; ?>
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $row['exps']; ?>" data-purecounter-duration="1" class="purecounter"><?php echo $row['exps']; ?> +</span>
          <p>Years (Work Experience)</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <?php echo $row['app_icon']; ?>
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $row['apps']; ?>" data-purecounter-duration="1" class="purecounter"><?php echo $row['apps']; ?> +</span>
          <p>Applications</p>
        </div>
      </div>

    </div>

  </div><!-- End Counts -->

  <!-- ======= Skills  ======= -->
  <div class="skills container">

    <div class="section-title">
      <h2>Skills</h2>
    </div>

    <div class="row skills-content">

      <?php
$sql = "SELECT * FROM `skills`";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
      <div class="col-lg-6">
        <div class="progress">
          <span class="skill"><?php echo $row['skill']; ?> <i class="val"><?php echo $row['avg']; ?>%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['avg']; ?>" aria-valuemin="0" aria-valuemax="<?php echo $row['avg']; ?>"></div>
          </div>
        </div>
      </div>
        <?php
}
} else {

    echo "no record found";
}
?>



    </div>

  </div><!-- End Skills -->

  <!-- ======= Interests ======= -->
  <div class="interests container">

    <div class="section-title">
      <h2>Interests</h2>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box">
          <i class="ri-store-line" style="color: #ffbb2c;"></i>
          <h3>Traveling</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
          <h3>Reading Books</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
          <h3>Sci-Fi Movies</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
          <h3>Cricket</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-database-2-line" style="color: #47aeff;"></i>
          <h3>Social Works</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
          <h3>Teaching</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
          <h3>Riding</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
          <h3>Event Management</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-anchor-line" style="color: #b2904f;"></i>
          <h3>Chess</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-disc-line" style="color: #b20969;"></i>
          <h3>Singing</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-base-station-line" style="color: #ff5828;"></i>
          <h3>Kabbadi</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
          <h3>Writting Sayries</h3>
        </div>
      </div>
    </div>

  </div><!-- End Interests -->

</section><!-- End About Section -->

<!-- ======= Review Section ======= -->
<section id="review" class="about">

  <!-- ======= Feedback ======= -->
  <div class="about-me container">

    <div class="section-title">
      <h2>Feedbacks</h2>
      <p>Clients Feedback For my Works.</p>
    </div>

  </div>

  <!-- ======= Reviews ======= -->
  <div class="testimonials container">

    <div class="section-title">
      <h2>Reviews</h2>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
      <?php
$qury = "SELECT * FROM `reviews` WHERE `status` = 1";
$r_result = mysqli_query($connect, $qury);
if (mysqli_num_rows($r_result) > 0) {
    while ($nrow = mysqli_fetch_assoc($r_result)) {
        ?>
            <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <?php echo $nrow['review']; ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="<?=$site_url . $nrow['client_pic']?>" class="testimonial-img" alt="<?=$nrow['name']?>" style="height: 85px;width: 85px;">
                    <h3><?php echo $nrow['name']; ?></h3>
                    <h4><?php echo $nrow['post']; ?> </h4>
                </div>
            </div><!-- End testimonial item -->

        <?php
}
} else {
    echo "No record found.";
}
?>

      </div>
      <div class="swiper-pagination"></div>
    </div>

    <div class="owl-carousel testimonials-carousel">

    </div>

    <?php

if (isset($_POST['submit_rev'])) {
    $cname = mysqli_real_escape_string($connect, $_POST['cname']);
    $post = mysqli_real_escape_string($connect, $_POST['cpost']);
    $phon = mysqli_real_escape_string($connect, $_POST['cphone']);
    $message = mysqli_real_escape_string($connect, $_POST['cmessage']);
    $date = date('Y-m-d');

    // Validate and process file upload
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["cpic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit_rev"])) {
        $check = getimagesize($_FILES["cpic"]["tmp_name"]);
        if ($check === false) {
            echo "<script>alert('File is not an image.');</script>";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>alert('Sorry, file already exists.');</script>";
        $uploadOk = 0;
    }

    // Check file size (max 5MB)
    if ($_FILES["cpic"]["size"] > 5000000) {
        echo "<script>alert('Sorry, your file is too large.');</script>";
        $uploadOk = 0;
    }

    // Allow only certain image file formats
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG, and GIF files are allowed.');</script>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.');</script>";
    } else {
        // Move the file to the target directory
        if (move_uploaded_file($_FILES["cpic"]["tmp_name"], $target_file)) {
            // File upload successful, proceed with the database insert

            // Sanitize file path before insertion
            $target_file = mysqli_real_escape_string($connect, $target_file);

            $sql = "INSERT INTO reviews (`name`, `post`, `phone_no`, `client_pic`, `review`, `status`, `review_on`)
                    VALUES ('$cname', '$post', '$phon', '$target_file', '$message', 0, '$date')";

            if (mysqli_query($connect, $sql)) {
                echo "<script>alert('Thanks, Your Feedback has been sent to the Admin.');</script>";
                echo "<script>window.location.href='thanks.php';</script>";
            } else {
                echo "<script>alert('Sorry ....Message could not be sent...!!');</script>";
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        }
    }
}
?>



    <div class="contact">
      <div class="my-3">
        <div class="error-message"><?php echo $msg; ?></div>
      </div>
      <form method="post" class="php-email-form mt-4" enctype="multipart/form-data">
        <h3 class="text-center text-white">Give Me Your valueable Review</h3>
        <div class="row mb-3">
          <div class="col-md-6 form-group">
            <input type="text" name="cname" class="form-control" id="cname" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="cpost" id="cpost" placeholder="Your Job Role/Occupation" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="number" class="form-control" name="cphone" id="cphone" placeholder="Contact No" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="file" class="form-control" name="cpic" id="cpic" accept="image/*" required>
          </div>
        </div>
        <div class="form-group my-3">
          <textarea class="form-control" name="cmessage" rows="5" placeholder="Write Ur Review.." required></textarea>
        </div>

        <div class="text-center">
          <input type="submit" name="submit_rev" class="btn btn-warning" value="Submit Review">
        </div>
      </form>
    </div>

  </div><!-- End Reviews  -->

</section>

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2>
      <p>Check My Resume</p>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <h3 class="resume-title">Summary</h3>
        <div class="resume-item pb-0">
          <h4>Rahul Kumar Pandey</h4>
          <p><em>Innovative and deadline-driven Full Stack Website & Web Application Developer with 2+ years of experience designing and developing user-centered digital marketing material from scratch or initial concept to final, polished deliverable.</em></p>
          <p>
          <ul>
            <li>Dhanbad, Jharkhand, INDIA</li>
            <li>(+91) 9123-429-191</li>
            <li>pkrahul93@gmail.com</li>
          </ul>
          </p>
        </div>

        <h3 class="resume-title">Education</h3>
        <div class="resume-item">
          <h4>B.Tech in Computer Science &amp; Engineering</h4>
          <h5>Batch ( 2017 - 2021 )</h5>
          <p><em>Guru Gobind Singh Educational Society & Technical Campus, Bokaro, JHARKHAND, INDIA</em></p>
          <p>
            Obtained Marks/Grade : 8.0 CGPA
          </p>
        </div>
        <div class="resume-item">
          <h4>12th (I.Sc)</h4>
          <h5>2012 - 2014</h5>
          <p><em>Miajan Memorial Inter Collage, Bijulia, JHARKHAND</em></p>
          <p>
            Obtained Marks/Grade : 47 %
          </p>
        </div>
        <div class="resume-item">
          <h4>10th (Matric)</h4>
          <h5>2007 - 2008</h5>
          <p><em>JKRR Hindi High High School, Chirkunda, JHARKHAND</em></p>
          <p>
            Obtained Marks/Grade : 70 %
          </p>
        </div>
        <div class="resume-item">
          <h4>Senior Diploma In Classical Singing</h4>
          <h5>2009 - 2014</h5>
          <p><em>Prayag Sangit Samiti, ALAHABAD, UP</em></p>
          <p>
            Obtained Marks/Grade : 1st Div
          </p>
        </div>
        <div class="resume-item">
          <h4>Event Participation</h4>
          <h5>Apr 24th 2021</h5>
          <p><em>Online Event, Organised By GUVI</em></p>
          <p>
          <ul>
            <li>Developed a Face Mask detection application </li>
            <li>Using Python </li>
            <li>Using Sci-Kit Learn Liberary </li>
            <li>Using Tensor-Flow Liberary </li>
          </ul>
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <h3 class="resume-title">Professional Experience</h3>
        <div class="resume-item">
          <h4>PHP Developer</h4>
          <h5>Mar 2023 - June 2023</h5>
          <p><em>Riser Techub Pvt. Ltd, Pune Maharashtra </em></p>
          <p>
          <ul>
            <li>Complete the given task of seniors on given time.</li>
            <li>Handle Laravel MLM Projects with the help of other team members & Seniors. </li>
            <li>Write clean and reusable backend code for the projects.</li>
            <li>All work should be done on only Ubuntu Or Linux Operating System.</li>
          </ul>
          </p>
        </div>
        <div class="resume-item">
          <h4>Senior PHP Website & MLM Software Developer</h4>
          <h5>July 2022 - Feb 2023</h5>
          <p><em>Digital Vyapar Seva, New-Delhi </em></p>
          <p>
          <ul>
            <li>Client panel design, development, and MLM Plan implementation.</li>
            <li>Delegate tasks alone and provide counsel on all aspects of the project. </li>
            <li>Supervise the assessment of all UI materials in order to ensure quality and accuracy of the UX design</li>
            <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
          </ul>
          </p>
        </div>
        <div class="resume-item">
          <h4>PHP Website Developer</h4>
          <h5>Jan 2022 - June 2022</h5>
          <p><em>Suprams Info Solutions, Janakpuri District Center, New-Dellhi</em></p>
          <p>
          <ul>
            <li>To Manage websites and fixing bugs as well as clients issues.</li>
            <li>Managed several projects or tasks at a given time while under pressure</li>
            <li>Recommended and consulted with clients on the most appropriate graphic design & development</li>
            <li>To design database for managing data of the clients.</li>
            <li>Manage whole backend and logical part of the site.</li>
          </ul>
          </p>
        </div>
        <div class="resume-item">
          <h4>PHP Trainee/Developer</h4>
          <h5>Apr 2020 - Dec 2021</h5>
          <p><em>Aarfaa Technovision Pvt Ltd. Pune</em></p>
          <p>
          <ul>
            <li>Developed many frontend for the websites. </li>
            <li>Designed Wireframes for the client's project. </li>
            <li>Designed single page websites at a given time. </li>
            <li>Managed projects or tasks using external CSS and custome functions .</li>
            <li>Developed frontend from scratch using pure HTML, CSS & Javascript only.</li>
          </ul>
          </p>
        </div>

      </div>
    </div>

  </div>
</section><!-- End Resume Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Services</h2>
      <p>My Services</p>
    </div>

    <div class="row">
      <?php
$sql = "SELECT * FROM `services` WHERE `status` = 1";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><?php echo $row['icon']; ?></div>
              <h4><a href=""><?php echo $row['service_name']; ?></a></h4>
              <p><?php echo $row['service_dtl']; ?></p>
            </div>
          </div>
      <?php
}
} else {

    echo "No Record Found";
}
?>
    </div>

  </div>
</section>
<!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h2>Portfolio</h2>
      <p>My Works</p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-front">Frontend Samples</li>
          <li data-filter=".filter-blog">Blogging Sites</li>
          <li data-filter=".filter-service">Service Sites</li>
          <li data-filter=".filter-ecom">e-Commerce Sites</li>
          <li data-filter=".filter-charity">Charity Sites</li>
          <li data-filter=".filter-cms">CMS</li>
          <li data-filter=".filter-matrimonial">Matrimonial Sites</li>
          <li data-filter=".filter-msys">Management Systems</li>
          <li data-filter=".filter-mlms">MLM Pannels</li>
          <li data-filter=".filter-other">Others</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <?php
$sql = "SELECT * FROM `projects` WHERE status = 1";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?php echo $row['filter']; ?>">
            <div class="portfolio-wrap">
              <img src="<?php echo $base_url; ?><?php echo $row['prj_img']; ?>" class="img-fluid" alt="<?php echo $row['prj_name']; ?>">
              <div class="portfolio-info">
                <h4><?php echo $row['prj_name']; ?></h4>
                <p>
                  <?php
$cat = $row['cat_id'];
        $sqll2 = "SELECT * FROM categories WHERE id = $cat";
        $ress2 = mysqli_query($connect, $sqll2);
        $ro = mysqli_fetch_array($ress2);
        ?>
                  <?php echo $ro['category']; ?>
                </p>
                <div class="portfolio-links">
                  <a href="<?php echo $base_url; ?><?php echo $row['prj_img']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row['prj_name']; ?>"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php?pid=<?php echo $row['slug']; ?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="<?php echo $row['prj_name']; ?> Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
      <?php
}
} else {

    echo "no record found";
}
?>

    </div>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Contact Me</p>
    </div>

    <div class="row mt-2">

      <div class="col-md-6 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-map"></i>
          <h3>My Address</h3>
          <h5>Permanent Address</h5>
          <p>Badapandeydih Khanudih Baghmara, Dhanbad, Jharkhand 828306</p>
          <hr>
          <h5>Current Address</h5>
          <p>Bikash-Nagar, Ranhaola Vihar, gali No-09, Uttam-Nagar,West-Delhi-94</p>
        </div>
      </div>

      <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-share-alt"></i>
          <h3>Social Profiles</h3>
          <hr>
          <div class="social-links">
            <a href="https://github.com/pkrahul93" class="github" target="_blank"><i class="bi bi-github"></i></a>
            <a href="https://www.facebook.com/users/pkrahul93" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.linkedin.com/in/rahul-kumar-pandey-b3a906210/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>

          </div>
        </div>
      </div>

      <div class="col-md-6 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-envelope"></i>
          <h3>Email Me</h3>
          <a href="mailto:pkrahul93@gmail.com">
            <p>pkrahul93@gmail.com</p>
          </a>
        </div>
      </div>
      <div class="col-md-6 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-phone-call"></i>
          <h3>Call Me</h3>
          <a href="tel:+919123429191" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});">
            <p>+91 912 342 9191 <span class="btn btn-outline-success" style="border-radius: 30px 0 30px 0;">Click to Call</span></p>
          </a>
        </div>
      </div>
    </div>

    <?php
$msg = '';
if (isset($_POST['submit_form'])) {

    $name = mysqli_real_escape_string($connect,$_POST['name']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $phone = mysqli_real_escape_string($connect,$_POST['phone']);
    $message = mysqli_real_escape_string($connect,$_POST['message']);
    $subject = mysqli_real_escape_string($connect,$_POST['subject']);
    $date = date('Y-m-d');

    $res = mysqli_query($connect, "INSERT INTO contacts (`name`,`email_`,`contact`,`subject`,`message`,`msg_on`) VALUES ('$name','$email','$phone','$subject','$message','$date')");

    $to = "pkrahul93@gmail.com";
    $message = "<b>Name :  $name</b><br /> <b>Email :  $email</b><br /> <b>Phone :  $phone</b><br /> <b>Message :  $message</b><br />";

    $header .= 'From: ' . "$email" . '' . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail($to, $subject, $message, $header);

    if ($retval == true || $res == true) {
        echo "<script>window.location.href='thanku.php?user=$name';</script>";
    } else {
        $msg = "Sorry something went wrong....Try again...!!";
    }
}

?>

    <form method="post" class="php-email-form mt-4">
      <div class="my-3">
        <div class="error-message"><?php echo $msg; ?></div>
      </div>
      <div class="row">
        <div class="col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
        <div class="col-md-3 form-group mt-3">
          <input type="number" class="form-control" name="phone" id="phone" placeholder="Contact No" required>
        </div>
        <div class="col-md-9 form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
      </div>
      <div class="form-group my-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>

      <div class="text-center">
        <input type="submit" name="submit_form" class="btn btn-warning" value="Send Message">
      </div>
    </form>

  </div>
</section><!-- End Contact Section -->

<?php require 'footer.inc.php';?>