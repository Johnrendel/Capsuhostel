<?php

include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CAPSU Pilar Hostel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Capsu logo.png" rel="icon">
  <link href="assets/img/Capsu logo.png" rel="Capsu logo">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/1style.css" rel="stylesheet">

</head>

<body>

 <!-- ======= Booking Section ======= -->
 <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse" id="Booking">
    <div class="title-box-d">
      <h3 class="title-d"><strong>CAPSU Pilar <span class="color-b">Hostel</span></strong></h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="confirmation.php" method="POST" role="form">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Full Name</label>
              <input type="text" name="fname" class="form-control form-control-lg form-control-a" placeholder="First Name" required>

              <label class="pb-2" for="email">Email</label>
              <input type="email" name="email" class="form-control form-control-lg form-control-a" placeholder="Email" required>

              <label class="pb-2" for="Phone">Phone No.</label>
              <input type="tel" id="phone" name="phone" class="form-control form-control-lg form-control-a" placeholder="+63 XXX XXX XXXX" required>
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Type of Rooms</label>
              <select class="form-control form-select form-control-a" id="Type" name="TypeofRoom" required>
                <option hidden></option>
                <option>Presidential Suites</option>
                <option>Twin Rooms</option>
                <option>Single Rooms</option>
              </select>
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Bedding Type</label>
              <select class="form-control form-select form-control-a" id="Type" name="BedType" required>
                <option hidden></option>
                <option>Single</option>
                <option>Double</option>
                <option>Queen</option>
                <option>King</option>
              </select>
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="No. of rooms">No. of Rooms</label>
              <input type="number" min="1" oninput="validity.valid||(value='');" class="form-control form-a" id="Type" name="NoofRoom" required>
            </div>
          </div> 

          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Type of Meal</label>
              <select class="form-control form-select form-control-a" id="Type" name="meal" required>
                <option hidden></option>
                <option>Room Only</option>
                <option>Breakfast</option>
                <option>Half Board</option>
                <option>Full Board</option>
              </select>
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Arrival">Check In</label>
              <input type="date" class="form-control form-control-a" name="cin" required> 
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Departure">Check out</label>
              <input type="date" class="form-control form-control-a" name="cot" required>
            </div>
          </div>
            <div class="col-md-12 text-center">
              <a href="confirmation.php" target="_blank">
                <button type="submit" class="btn btn-b" name="Submit">Confirm</button>
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->
            </div>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->

 <!-- ======= Header/Navbar ======= -->
 <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
   <div class="container">
     <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
       <span></span>
     </button>
     <img src="assets/img/Capsu logo.png" class="icons"> <a class="navbar-brand text-brand" href="#">CAPSU Pilar<span class="color-b"> Hostel</span></a>

     <div class="navbar-collapse collapse justify-content-lg-end" id="navbarDefault">
       <ul class="navbar-nav">

         <li class="nav-item">
           <a class="nav-link scrollto" href="index.php">Home</a>
         </li>

         <li class="nav-item">
           <a class="nav-link scrollto" href="index.php#rooms">Rooms</a>
         </li>

         <li class="nav-item">
           <a class="nav-link scrollto " href="#contact">Contact</a>
         </li>
       </ul>
     </div>

     <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"> <i class="bi bi-calendar4-week"></i> &nbsp;Book Now

     </button>

   </div>
 </nav><!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Presidential Suites</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php"><strong>Home</strong></a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#description"><strong>Description</strong></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Presidential Suites
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="assets/img/presidential.jpg" alt="" class="img-fluid">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="assets/img/Presidential1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row" id="description">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="bi bi-cash">₱</span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c">3000</h5>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Quick Summary</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Room Type:</strong>
                        <span>Presidential Suites</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>No. of Room</strong>
                        <span>1</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Area:</strong>
                        <span>-
                          <sup>-</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Beds:</strong>
                        <span>2</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Baths:</strong>
                        <span>Yes</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Room Description</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    The Presidential Suite is a sanctuary of luxury and comfort, with a design that is sure to appeal to all preferences. It comes with a fully-furnished kitchen, a spacious bedroom, and a large living area that includes both work and dining spaces. A guest restroom is also included for convenience. To top it all off, VIP amenities are provided to enhance your stay.
                  </p>
                </div>
                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Amenities</h3>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  <ul class="list-a no-margin">
                    <li>Refrigerator</li>
                    <li>Bath Tub</li>
                    <li>Flat Screen T.V.</li>
                    <li>Air-Conditioner</li>
                    <li>Internet</li>
                    <li>Intercoms</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

  <!-- ======Contact/Footer====== -->
  <section id="contact" class="section-footer">
    <div class="container">
      <div class="section-title">
        <h2 class="title-a text-center">Contact</h2>
        <p class="title-wrap color-a text-center">
          Get in touch and let us know how we can help. Our team is happy to
          answer your questions or inquiries. Reach us however you like.
        </p>
      </div>
    <div class="row no-gutters justify-content-center">
    <div class="col-lg-5 d-flex align-items-stretch">
      <div class="info">
      <div class="icon-box section-b2">
        <div class="icon-box-icon">
          <span class="bi bi-envelope"></span>
        </div>
        <div class="icon-box-content table-cell">
          <div class="icon-box-title">
            <h4 class="icon-title">Say Hello</h4>
          </div>
          <div class="icon-box-content">
            <p class="mb-1">Email:
              <span class="color-a">pilar@capsu.edu.ph</span>
            </p>
            <p class="mb-1">Phone:
              <span class="color-a">0995-732-1283</span>
            </p>
            <p class="mb-1">Landline
              <span class="color-a">6210803(036)</span>
            </p>
          </div>
        </div>
      </div>
      <div class="icon-box section-b2">
        <div class="icon-box-icon">
          <span class="bi bi-geo-alt"></span>
        </div>
        <div class="icon-box-content table-cell">
          <div class="icon-box-title">
            <h4 class="icon-title">Find us in</h4>
          </div>
          <div class="icon-box-content">
            <p class="mb-1">
              Capiz State University Pilar Sattelite College 
              <br> Natividad, Pilar, Capiz, Philippines. 5804
            </p>
          </div>
        </div>
      </div>
      <div class="icon-box">
        <div class="icon-box-icon">
          <span class="bi bi-share"></span>
        </div>
        <div class="icon-box-content table-cell">
          <div class="icon-box-title">
            <h4 class="icon-title">Social networks</h4>
          </div>
          <div class="icon-box-content">
            <div class="socials-footer">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="https://web.facebook.com/profile.php?id=100057386862445" class="link-one">
                    <i class="bi bi-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="link-one">
                    <i class="bi bi-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="link-one">
                    <i class="bi bi-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="link-one">
                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="col-lg-7 d-flex align-items-stretch">
      <div class="contact-map box">
        <div id="map" class="contact-map">
          <iframe style="border: 0; width: 250%; height: 400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.9434522531546!2d123.00252387515594!3d11.484004588711082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a5feb78022ee73%3A0xfb488ee46c3a0650!2sCapiz%20State%20University%20-%20Pilar%20Campus!5e0!3m2!1sen!2sph!4v1693448666210!5m2!1sen!2sph" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

        <div class="row justify-content-center">
          <div class="col-sm-12">
            <form action="forms/emailcontact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                  </div>
                </div>
                <div class="col-md-12 my-3">
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-a">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="nav-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#">Home</a>
            </li>
            <li class="list-inline-item">
              <a href="#about">About</a>
            </li>
            <li class="list-inline-item">
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </nav>
        <div class="copyright-footer">
          <p class="copyright color-text-a">
            &copy; Copyright
            <span class="color-a">CapSU Pilar Hostel</span> All Rights Reserved.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>