
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Makiling Clinic</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel = "icon" href = 
"assets/img/icon.png" 
        type = "image/x-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/owlcarousel/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Makiling Clinic<span></span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#testimonials">Testimonial</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li><a href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="Login.php">Log in</a></li>     
              <li><a href="signup.php">Signup</a></li>
            </ul>
          </li>

        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span >Makiling Clinic</span></h2>
          <p>Welcome to our Clinic homepage! We're here to provide you with exceptional care and personalized attention.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="login.php" class="btn-get-started">Book Appointment</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <div class="container-fluid px-0 mb-5">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="assets/img/home.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="assets/img/home2.png" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-end">
           
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img class="w-100" src="assets/img/home3.png" alt="Image">
                      <div class="carousel-caption">
                          <div class="container">
                              <div class="row justify-content-end">
         
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="w-100" src="assets/img/home4.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
       
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5 justify-content-center">
    
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-hospital"></i></div>
              <h4 class="title"><a href="#services" class="stretched-link">Services</a></h4>
            </div>
          </div><!--End Icon Box -->
    
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-info-circle-fill"></i></div>
              <h4 class="title"><a href="#about" class="stretched-link">About us</a></h4>
            </div>
          </div><!--End Icon Box -->
    
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-lines-fill"></i></div>
              <h4 class="title"><a href="#doctors" class="stretched-link">Doctors</a></h4>
            </div>
          </div><!--End Icon Box -->
        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->
  <main id="main">




    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Welcome to our clinic services! Our clinic is dedicated to providing comprehensive healthcare to individuals of all ages and backgrounds. We offer a wide range of services designed to promote your well-being and address your healthcare needs. Whether you require routine medical care, preventive services, specialized treatments, or diagnostic procedures, our team of skilled healthcare professionals is here to assist you.</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-clipboard2-pulse"></i>
              </div>
              <h3>Diagnostic Services</h3>
              <p>The Clinic offers a diagnostic services that helps to identify and evaluate health conditions.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-heart-pulse"></i>
              </div>
              <h3>Primary Care</h3>
              <p>
                The clinic provides a primary care services, which include general medical care for common illnesses and injuries. This can involve diagnosing and treating various health conditions, performing routine check-ups, and managing chronic diseases.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bandaid"></i>
              </div>
              <h3>Preventive Care</h3>
              <p>The Clinic offers a preventive care services aimed at promoting wellness and disease prevention.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-lungs"></i>
              </div>
              <h3>Specialized Care</h3>
              <p>The Clinic offers specialized diagnostic procedures, treatment options, and consultations related to their area of expertise.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-prescription"></i>
              </div>
              <h3>General Medical Consultations</h3>
              <p>The Clinic provides a consultations with doctors who diagnose and treat various medical conditions. These consultations may involve taking a patient's medical history, performing physical examinations, and providing appropriate medical advice or treatment.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <h3>Referral Services</h3>
              <p>If the clinic does not have the required expertise or resources to manage a particular condition, they may provide referral services. They can connect patients with specialists or hospitals that can offer the necessary care..</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->
 
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Welcome to our Testimonial Page! Here, we are proud to share the stories and experiences of our valued patients who have received exceptional care at our clinic. We believe that hearing directly from those who have entrusted us with their health is the best way to showcase the quality and compassion of our healthcare services.</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Saul Goodman</h3>

                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    I'm grateful for the exceptional care I received at Makiling Clinic. They not only treated my illness but also provided valuable preventive measures to keep me healthy in the long run.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sara Wilsson</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    The urgent care services at Makiling Clinic were a lifesaver. I was seen quickly, and the staff was efficient and compassionate, making a stressful situation much more manageable.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jena Karlis</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    I'm impressed by the expertise of the specialists at Makiling Clinic. They worked in collaboration with my primary care physician to provide me with comprehensive care and the best possible outcomes.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Matt Brandon</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    I'm impressed by the expertise of the specialists at Makiling Clinic. They worked in collaboration with my primary care physician to provide me with comprehensive care and the best possible outcomes.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>John Larson</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    I can't thank Makiling Clinic enough for their outstanding care. They genuinely prioritize the health and happiness of their patients, and it shows in every aspect of their service.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Medical Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Medical Team</h2>
          <p>Welcome to the dedicated medical team at Makiling clinic, where your well-being is our top priority. Our team of highly skilled and compassionate healthcare professionals is committed to providing exceptional care and support throughout your medical journey.</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <h4>Jose De Leon</h4>
              <span>General Surgeon</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jfif" class="img-fluid" alt="">
              <h4>Marquee Macapagal</h4>
              <span>Speech Pathologists</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <h4>Juan Mactan</h4>
              <span>Cardiologist</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Amanda Fernandez</h4>
              <span>Anesthesiologist</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

        </div>

      </div>
    </section><!-- End Our Team Section -->
 <!-- ======= About Us Section ======= -->
 <section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>About Us</h2>
      <p>Centrally located in the heart of Calamba, Makiling Clinic is Laguna’s premiere Health Center. Makiling Clinic is the one-stop Center. From the moment you arrive you will notice the warm welcome of staff ready to assist your every need, surely Makiling Clinic you will feel the loving care and attention of a family. Nowhere in Laguna will you find our combination of quality medical care, service and affordability. 
        Makiling Clinic always understands your needs and is ready to provide you with quality healthcare and service.</p>
    </div>

    <div class="row gy-4">
      <div class="col-lg-6">
        <h3>Our history</h3>
        <img src="assets/img/history.jpg" class="img-fluid rounded-4 mb-4" alt="">
        <p>Established in 2012, our clinic has been serving the community for over 11 years. We are proud to be one of the leading healthcare providers, dedicated to delivering exceptional medical care and promoting the well-being of our patients.
        </p>
        <p>Our clinic was founded by Cyrix Pearl Comparativo, a visionary healthcare professional with a passion for improving the health outcomes of individuals in our community. Inspired by a commitment to compassionate care, our founder embarked on a mission to establish a clinic that would provide comprehensive medical services and personalized attention to every patient</p>
      </div>
      <div class="col-lg-6">
        <div class="content ps-0 ps-lg-5">
          <h4><strong>Contact Us</strong></h4><br>
          <ul>
            <h5>Connect to us </h5>
            <i></i>Email: makilingclinic@gmail.com<li></li>
            <i></i>Telephone: (02)123-4567<li></li>
            <i></i>Cellphone: 09123456789<br><br>
            <h5>Business Hours</h5>
            <i></i>Monday to Friday: 7:00 AM - 9:00PM<li></li>
            <i></i>Saturday to Sunday: 8:00 AM - 7:00 PM<li></li>
            <i></i><strong>Open on Holidays</strong><br><br>
            <h5>Address</h5>
            <i></i>Km. 53 Pan-Philippine Hwy, Calamba, 4029 Laguna<li></li>
          </ul>
          <iframe class="w-100 rounded"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.275320150124!2d121.1340265148353!3d14.178645990072313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd63862f343bdd%3A0x27b21f8ee9b7395d!2sNational%20University%20Laguna!5e0!3m2!1sen!2sph!4v1686496347107!5m2!1sen!2sph"
          frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
          tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->
  


  
  </main><!-- End #main -->


  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">

      </div>
    </div>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script src="assets/owlcarousel/owl.carousel.min.js"></script>
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

  </html>