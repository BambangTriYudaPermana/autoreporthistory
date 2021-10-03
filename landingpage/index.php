<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GetAutoRecord</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/landing/img/favicon/favicon.ico" rel="icon">
  <link href="../assets/landing/img/favicon/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/landing/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
  
  <link href="../assets/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/landing/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Regna - v4.4.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  <style>
    #hero {
      width: 100%;
      height: 100vh;
      background: url('../assets/images/2.jpg') top center;
      background-size: cover;
      position: relative;
    }
    .chack-form {
      color: white;
    }
    .form-group {
      margin-bottom : 5px;
    }
    .tulisan-tengah {
      text-align: center;
    }
    section.pricing {
      /* background: #007bff;
      background: linear-gradient(to right, #0062E6, #33AEFF); */
    }

    .pricing .card {
      border: none;
      border-radius: 1rem;
      transition: all 0.2s;
      box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .pricing hr {
      margin: 1.5rem 0;
    }

    .pricing .card-title {
      margin: 0.5rem 0;
      font-size: 0.9rem;
      letter-spacing: .1rem;
      font-weight: bold;
    }

    .pricing .card-price {
      font-size: 3rem;
      margin: 0;
    }

    .pricing .card-price .period {
      font-size: 0.8rem;
    }

    .pricing ul li {
      margin-bottom: 1rem;
    }

    .pricing .text-muted {
      opacity: 0.7;
    }

    .pricing .btn {
      font-size: 80%;
      border-radius: 5rem;
      letter-spacing: .1rem;
      font-weight: bold;
      padding: 1rem;
      opacity: 0.7;
      transition: all 0.2s;
    }

    /* Hover Effects on Card */

    @media (min-width: 992px) {
      .pricing .card:hover {
        margin-top: -.25rem;
        margin-bottom: .25rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
      }

      .pricing .card:hover .btn {
        opacity: 1;
      }
    }

    .col-center {
      margin: 0 auto;
      float: none !important;
    }
    .carousel {
      padding: 0 70px;
    }
    .carousel .carousel-item {
      color: #999;
      font-size: 14px;
      text-align: center;
      overflow: hidden;
      min-height: 290px;
    }
    .carousel .carousel-item .img-box {
      width: 135px;
      height: 135px;
      margin: 0 auto;
      padding: 5px;
      border: 1px solid #ddd;
      border-radius: 50%;
    }
    .carousel .img-box img {
      width: 100%;
      height: 100%;
      display: block;
      border-radius: 50%;
    }
    .carousel .testimonial {
      padding: 30px 0 10px;
    }
    .carousel .overview {	
      font-style: italic;
    }
    .carousel .overview b {
      text-transform: uppercase;
      color: #7AA641;
    }
    .carousel-control-prev, .carousel-control-next {
      width: 40px;
      height: 40px;
      margin-top: -20px;
      top: 50%;
      background: none;
    }
    .carousel-control-prev i, .carousel-control-next i {
      font-size: 68px;
      line-height: 42px;
      position: absolute;
      display: inline-block;
      color: rgba(0, 0, 0, 0.8);
      text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
    }
    .carousel-indicators {
      bottom: -40px;
    }
    .carousel-indicators li, .carousel-indicators li.active {
      width: 12px;
      height: 12px;
      margin: 1px 3px;
      border-radius: 50%;
      border: none;
    }
    .carousel-indicators li {	
      background: #999;
      border-color: transparent;
      box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
    }
    .carousel-indicators li.active {	
      background: #555;		
      box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
    }

    
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <!-- <a href="index.html"><img src="../assets/landing/img/logo.png" alt=""></a> -->
        <a href="index.html"><img src="../assets/images/logo3.png" alt="" style="width: 50%;"></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="index.html">Regna</a></h1>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Benefits</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#team">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link" href="" style="float: left;"><i class="fa fa-user-circle"></i> Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1><i>Get Your Report Now!</i></h1>
      <p class="wow fadeInUp" data-wow-delay="0.2s" style="color: white; font-size: 10pt;">
          Whether you’re planning to sell your car, trade it in or are simply curious, 
          <br class="hidden-xs">knowing how much your car is worth  
          can help you compare offers. Our proprietary technology estimates 
          <br class="hidden-xs">your vehicle value based on service, mileage and condition history taking into account over 60 checks in each VIN.
      </p>
      <!-- <h2>Whether you’re planning to sell your car, trade it in or are simply curious, knowing how much your car is worth can help you compare offers.</h2> -->
      <div class="chack-form form wow fadeInUp" data-wow-delay="0.3s" style="width: 50%;">
        <form class="form-group" method="POST" action="invoice" enctype="multipart/form-data" id="form-data">
        <!-- @csrf -->
            <div class="form-group row">
                <label class="col-sm-4 col-lg-2 col-form-label">Email<b style="color: red;">*</b></label>
                <div class="col-sm-8 col-lg-8">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Your email..." name="email" id="email">
                        <!-- <span class="input-group-addon" id="basic-addon3">$</span> -->
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-lg-2 col-form-label">Phone<b style="color: red;">*</b></label>
                <div class="col-sm-8 col-lg-8">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Your phone number..." name="phone" id="phone">
                        <!-- <span class="input-group-addon" id="basic-addon3">$</span> -->
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-lg-2 col-form-label">VIN<b style="color: red;">*</b></label>
                <div class="col-sm-8 col-lg-8">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Vin..." name="vin" id="vin" style="text-transform:uppercase">
                        <!-- <span class="input-group-addon" id="basic-addon3">$</span> -->
                    </div>
                </div>
            </div>
            <div>
                <button class="btn btn-lg btn-primary btn-action" style="border-radius: 5px 5px 5px 5px;" value="Check Vin!" onclick="validation()">Check Vin!</button>
            </div>
        </form>
      </div>
      <!-- <a href="#about" class="btn-get-started">Get Started</a> -->
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="534" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Benefits</h3>
          <p class="section-description">What Can You Expect From Our Reports?</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-check-circle"></i></a></div>
              <h4 class="title"><a href="">Report Summary</a></h4>
              <p class="description">The Report Summary includes basic information about your vehicle, such as the VIN, year, make and model. You’ll also find the Vehicle Score (when available) and whether the vehicle qualifies for Buyback Protection.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-check-circle"></i></a></div>
              <h4 class="title"><a href="">Accident Check</a></h4>
              <p class="description">Accident Check shows the number of accidents reported if such occurred. Each event, has date and location.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-check-circle"></i></a></div>
              <h4 class="title"><a href="">Title and Problem Check</a></h4>
              <p class="description">Any issues with the vehicle’s title will appear in this section. For example, if the vehicle has a salvage or junk title, it will be found here. Title brands or odometer problems will also show up in this section.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-check-circle"></i></a></div>
              <h4 class="title"><a href="">Odometer Check</a></h4>
              <p class="description">OdometerCheck will notify you of instances in our records where the odometer reading was reported. Any reported odometer reading that is out of line with what is expected will be flagged for you.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-check-circle"></i></a></div>
              <h4 class="title"><a href="">Use and Event Check</a></h4>
              <p class="description">If the vehicle was ever a rental vehicle or used as a service vehicle of some kind, you can find that in this section. Other examples of items you might find include a record of theft or repossession and corrected or duplicate titles.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-check-circle"></i></a></div>
              <h4 class="title"><a href="">Full History</a></h4>
              <p class="description">As its name suggests, this section reports on all reported events for that vehicle. Significant events that can be found in this section include: Odometer readings. Vehicle registrations, Title transfers, Reported at auto auction, Emissions inspection.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="pricing py-5" id="portfolio">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Pricing</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">
          <!-- Free Tier -->
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                <h6 class="card-price text-center">$25<span class="period">/1x Report</span></h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited
                    Private Projects</li>
                  <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated
                    Phone Support</li>
                  <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain
                  </li>
                  <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status
                    Reports</li>
                </ul>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary text-uppercase">Button</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Plus Tier -->
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                <h6 class="card-price text-center">$123<span class="period">/5x Report</span></h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
                  <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status
                    Reports</li>
                </ul>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary text-uppercase">Button</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                <h6 class="card-price text-center">$225<span class="period">/10x Report</span></h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong>
                  </li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free
                    Subdomains</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
                </ul>
                <div class="d-grid">
                  <a href="#" class="btn btn-primary text-uppercase">Button</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Testimonials</h3>
          <p class="section-description">What Customers Say</p>
        </div>
        <div class="container-xl">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="img-box"><img src="../assets/landing/img/team-1.jpg" alt=""></div>
                    <p class="testimonial">"Thanks. I got valuable info that I needed about a car’s damages. to be specific there was an airbag deployment and a vehicle rollover. So I was lucky that I checked the report first before buying the car. Was the price worth it? absolutely! Thanks for your service !"</p>
                    <p class="overview"><b>Paula Wilson</b></p>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box"><img src="../assets/landing/img/team-2.jpg" alt=""></div>
                    <p class="testimonial">"Once I decided to buy a good looking Cadillac Escalade. I really appreciate that my colleague advised me to take your service guys. As it turns out that Cadillac is Salvage, Junk and even flood damaged car - that’s what I learned from your report. I was about to buy it, thankfully I checked the report first. I skipped a lot of trouble. I Appreciate what you do!"</p>
                    <p class="overview"><b>Antonio Moreno</b></p>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box"><img src="../assets/landing/img/team-3.jpg" alt=""></div>
                    <p class="testimonial">"Very simple service with great information. I registered, paid, and got my report in just a few minutes. Everything is clear and simple. Got a rollback for the car I searched. And that wasn’t the only problem that was reported by your service. For more than a reasonable price I got the complete history of the car. Great service!"</p>
                    <p class="overview"><b>Michael Holz</b></p>
                  </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>cs.getautorecord@gmail.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/landing/vendor/aos/aos.js"></script>
  <script src="../assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/landing/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/landing/vendor/php-email-form/validate.js"></script>
  <script src="../assets/landing/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/landing/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/landing/js/main.js"></script>

</body>

</html>