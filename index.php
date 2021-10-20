<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Waldika Irawan - Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?php

      
      $query = "SELECT * FROM biodata";
      $data = mysqli_query($koneksi,$query);

      while($d = mysqli_fetch_array($data)){
        $nama_lengkap = $d['namaLengkap'];
        $profile = $d['profile'];
        $email = $d['email'];
        $phone = $d['phone'];
        $aboutUs = $d['aboutUs'];

      }
    ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">DevFolio</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class`="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonial</a></li>
          <li><a class="nav-link scrollto" href="#interest">Interest</a></li>
          <li><a class="nav-link scrollto" href="#education">Education</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I am Waldika Irawan</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Web Developer, Web Designer, Freelancer"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span><?php echo $nama_lengkap; ?></span></p>
                        <p><span class="title-s">Profile: </span> <span><?php echo $profile; ?></span></p>
                        <p><span class="title-s">Email: </span> <span><?php echo $email; ?></span></p>
                        <p><span class="title-s">Phone: </span> <span><?php echo $phone; ?></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>HTML</span> <span class="pull-right">85%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right">60%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead"><?php echo $aboutUs; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->

    
    <div id="testimonials" class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
                <?php
                
                  $query = "SELECT * FROM testimoni";
                  $data = mysqli_query($koneksi,$query);

                  while($d = mysqli_fetch_array($data)){
                    $namaTestimoni = $d['namaTestimoni'];
                    $deskripsi = $d['deskripsi'];
                ?>

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author"><?php echo $namaTestimoni; ?></span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        <?php echo $deskripsi; ?>
                      </p>
                    </div>
                    
                  </div>
                </div><!-- End testimonial item -->
                <?php 
                  } 
                ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Interests Section ======= -->
    <section id="interest" class="portfolio-mf sect-pt4 route">
      <div class="container mb-5">
        <div class="row">

          <!-- Query Interests -->
          <?php 
            $query = "SELECT * FROM interests";
            $data = mysqli_query($koneksi,$query);

            while($d = mysqli_fetch_array($data)){
              $deskripsi = $d['deskripsi'];

            }
           ?>


          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Interests
              </h3>
            <div class="line-mf"></div>
          </div>
        </div>

        <div class="w-100 mb-5">
          <p><?php echo $deskripsi; ?></p>
        </div>

      </div>
    </section>
    <!-- End Interests Section -->




    <!-- ======= Education Section ======= -->
    <br><br>
    <section id="education" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Education
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <!-- Query Education -->

        <?php 
            $query = "SELECT * FROM education";
            $data = mysqli_query($koneksi,$query);

            while($d = mysqli_fetch_array($data)){
              $kampus = $d['kampus'];
              $programStudi = $d['programStudi'];
              $awalSekolah = $d['awalSekolah'];
              $akhirSekolah = $d['akhirSekolah'];

           ?>

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
          <div class="w-100">
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-0"><?php echo $kampus; ?></h3>
                <div class="subheading mb-3"><?php echo $programStudi; ?></div>
              </div>
              <div class="resume-date text-md-right">
                <span class="text-primary"><?= $awalSekolah ." - ". $akhirSekolah; ?></span>
              </div>
            </div>

          </div>
        </section>

        <?php 
        } ?>
        
        
      </div>
    </section><!-- End Education Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>

                    <!-- Query Contact -->
                    <?php 
                      $query = "SELECT * FROM contact";
                      $data = mysqli_query($koneksi,$query);

                      while($d = mysqli_fetch_array($data)){
                        $deskripsi = $d['deskripsi'];
                        $alamat = $d['alamat'];
                        $phone = $d['phone'];
                        $email = $d['email'];
                        $github = $d['github'];
                        $facebook = $d['facebook'];
                        $instagram = $d['instagram'];

                     ?>
                    <div class="more-info">
                      <p class="lead"><?php echo $deskripsi; ?></p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span><?php echo $alamat; ?></li>
                        <li><span class="bi bi-phone"></span><?php echo $phone; ?></li>
                        <li><span class="bi bi-envelope"></span><?php echo $email; ?></li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="<?php echo $github; ?>"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                        <li><a href="<?php echo $facebook; ?>"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                        <li><a href="<?php echo $instagram; ?>"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        
                      </ul>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>