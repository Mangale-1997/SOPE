<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>School of Professional Engineering</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>

.bg-primary {
          background: #206f8b!important;
      }
 </style>

    </head>

    <body>


    <!-- spinner start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-info" style="width: 5rem; height: 5rem;" role="status">
                <span class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">SoPE</span>
            </div>
        </div>

<!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar  bg-red py-2 d-none d-lg-block ">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="border-end border-white pe-3">
                                <a href="#" class="text-white small"><i class="fas fa-map-marker-alt text-white me-2"></i>Find A Location</a>
                            </div>
                            <div class="border-end border-white ps-3" st>
                                <a href="mailto:example@gmail.com" class="text-white small" style="padding: 20px;"><i class="fas fa-envelope text-white me-2"></i>registrar@erb.go.tz</a>
                            </div>
                            <div class="ps-3">
                                <a href="+255 26 2960086/87" class="text-white small"><i class="fas fa-phone text-white me-2"></i> +255 26 2960086/87</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-white pe-3">
                                <a class="btn p-0 text-white me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn p-0 text-white me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn p-0 text-white me-3" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn p-0 text-white me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="dropdown ms-3">
                                <a href="#" class="dropdown-toggle text-white " data-bs-toggle="dropdown"><small><i class="fas fa-globe-europe text-white me-2"></i> English</small></a>
                                <div class="dropdown-menu rounded">
                                    <a href="#" class="dropdown-item">English</a>
                                    <a href="#" class="dropdown-item">Swahili</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

<!-- Erb end -->
<!-- Erb start-->
<div id="" class="header">
    <div class="container">
        <div class="row mt-3 mb-3">

            <div class="col-md-2 text-center">
                <a href="#" class="logo">
                    <img class="down" src="img/LOGO1.png" alt="" width="50">
                </a>
            </div>
            <div class="col-md-8 text-center">
                  <h3>SCHOOL OF PROFESSIONAL ENGINEERING</h3>
                  <h7>ENGINEERS REGISTRATION BOARD TANZANIA</h7><br>
                  <h9>THE MINISTRY OF WORKS</h9>
              </div>
            <div class="col-md-2 text-center">
                <a href="/" class="logo">
                    <img class="down" src="img/ERB-LOGO.png" alt="" width="50">

                </a>
            </div>
        </div>
    </div>
</div>
<!-- Erb end -->
<!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-2 bg-primary py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-danger">
                    <a href="#" class="navbar-brand p-0">
                        <h1 class="text-white mb-0"><i class="fa fa-school"></i> SoPE</h1>
                        <h5 class="text-white mb-4"> School of Professional Engineering </h5>

                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="" class="nav-item nav-link active" > <i class="fas fa-home text me-2"></i>Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">About Us</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">What We Do</a>
                                    <a href="<?php echo e(route('view-whoweare')); ?>" class="dropdown-item">Who We Are</a>
                                    <a href="team.html" class="dropdown-item">Who We Serve</a>
                                    <a href="testimonial.html" class="dropdown-item">Organisation Structure</a>

                                </div>
                                <!-- viewarticles -->
                            </div>
                            <a href="<?php echo e(route('view-services')); ?>" class="nav-item nav-link">Services</a>
                            <a href="" class="nav-item nav-link">Articles</a>
                            <a href="service.html" class="nav-item nav-link">Gallery</a>
                            <a href="blog.html" class="nav-item nav-link">Fee</a>
                            <a href="<?php echo e(route('viewcontact')); ?>" class="nav-item nav-link">Contact</a>
                            <a href="https://www.erb.go.tz" class="nav-item nav-link">ERB-Website</a>
                            </div>
                            </div>
                           </div>
                          </nav>
                         </div>
                         </div>
        <!-- Navbar & Hero End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->
<!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="img/image1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text fw-bold mb-4" style="letter-spacing: 3px;">About SoPE</h5>
                            <h1 class="display-1 text-capitalize text-white mb-2"></h1>
                            <p class="mb-5 fs-5">
                            The School of Professional Engineering (SoPE) project document has been initiated by the Engineers Registration Board (ERB) addresses critical gaps in the engineering professional training in Tanzania
                            </p>
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Join Us</a>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/images2.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text fw-bold mb-4" style="letter-spacing: 3px;">Mission of SoPE</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4"></h1>
                            <p class="mb-5 fs-5 animated slideInDown">To establish a sound, effective, and efficient institution that will promote appropriate professional training to build on the current initiatives including CPD, SEAP, mentoring, and apprenticeship programs in-order to build capacity for the engineering professional practice in the country
                            </p>
                            <a class="btn btn-info rounded-pill text-white py-3 px-5" href="#">Join Us</a>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/images3.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text fw-bold mb-4" style="letter-spacing: 3px;">Vision of SoPE</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4"></h1>
                            <p class="mb-5 fs-5 animated slideInDown">A world-class entity in Tanzania that promotes engineering practitioners for quality Engineering service delivery </p>

                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Carousel End -->
<br>
<!-- contents -->
<div class="col-md-18 col-xl-12 px-0 bg-">
      <div class="col-md-10 offset-md-1 col-xs-12 ">
          <div class="row">
              <div class="col-12 px-0 px-xs-2">
                  <nav aria-label="breadcrumb" class="mb-0">

                  </nav>
              </div>
          </div>

          <div class="col-md-12 px-0">
            <div class="col-md-12 px-3 px-xs-0">
                <div class="row px-0">

                  <div class="page-header col-12 px-0 px-xs-2">
                  <!-- <h4 class="text-primary" style="float: left; font-weight:bold;">About SoPE</h4> -->
                  </div>


                  <div class="col-md-12 px-xs-3 px-0 ">
                    <div class="who-are-we">
                      <div class="container-fluid bg-white"  style="border-radius: 10px;">
                        <div class="row">
                        <h4 class="text-primary" style="float: left; font-weight:bold;">About SoPE</h4>
                          <div class="col-md-8">
                            <p style="text-align: justify;color:black " >The School of Professional Engineering (SoPE) is a visionary project that aims to enhance the engineering profession in Tanzania by providing high-quality and relevant training for engineering practitioners. The project is initiated by the Engineers Registration Board (ERB), a government body that regulates and supports the engineering sector in Tanzania. The project is aligned with the national plans and development goals, as well as the ERB’s vision and mission. The project is justified by the need to address the skills gaps, capacity challenges, and registration requirements in the engineering profession. The project will use a hybrid model of online courses, face-to-face sessions, and apprenticeship to deliver industry-aligned, innovative, and accessible training for engineering practitioners.</p>
                          </div>
                          <div class="col-md-4">
                   <img src="img/registrar.jpg" style="height:220px; width: 330px; border-radius: 20px;"><br><br>
                   <p class="text-primary" style="font-weight:bold;"> Eng. Bernard Kavishe</p>
                   <p class="text-primary" style="font-weight:bold;">ERB, Registrar</p>

                       </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- misson, vission & motto -->
                  <div class="col-md-12 mb-4 px-xs-3 px-0">
                    <div class="who-are-we">
                      <div class="container-fluid px-0">
                        <div class="row mt-5">


                          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 bg-info" style="border-radius:40px">
                            <div class="card text-center text-white bg-white" style="border-radius:20px">
                            <i class="fa fa-star fa-2x" aria-hidden></i>
                              <div class="card-block">
                                <h3 class="card-title">Vision </h3>
                                <p class="card-text" style="color:black;">
                                A world class entity in Tanzania that promotes engineering practitioners for quality Engineering service delivery.
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 bg-secondary " style="border-radius:40px">
                            <div class="card text-center text-white bg-white" style="background:">
                            <i class="fa fa-star fa-2x" aria-hidden></i>
                              <div class="card-block">
                                <h3 class="card-title">Mission </h3>
                                <p class="card-text" style="color:black;">
                                To establish a sound, effective, and efficient institution that will promote appropriate professional training to build on the current initiatives including CPD, SEAP, mentoring, and apprenticeship programs in-order to build capacity for the engineering professional practice in the country.
                                </p>
                              </div>
                            </div>
                          </div>


                          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 bg-info " style="border-radius:40px">
                            <div class="card text-center text-white bg-white" style="background:">
                            <i class="fa fa-star fa-2x" aria-hidden></i>
                              <div class="card-block">
                                <h3 class="card-title">Motto </h3>
                                <p class="card-text" style="color:black;">
                                Building Capacity, Shaping Excellence in Engineering.
                                </p>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /mission, missio and motto end -->

<!-- core value starting -->

        <!-- core value starting -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-bla" style="font-weight: bold; color:black">Our Core Values</h4>
                 <p class="mb-0" style="color:black; font-weight: bold;">
                 The School of Professional Engineering upholds five core values, outlined as follows:
                    </p>
                </div>
                <div class="row g-4 justify-content-center bg-#206f8b" style="border-radius:20px">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                            <i class="fa fa-star fa-2x"></i>
                                <div class="service-icon p-3">
                                    <i class="fa fa fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4" style="color:black; font-weight: bold;">Value for Money</a>
                                    <p class="mb-4"style="color:black">Delivering cost-effective and impactful solutions.</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                            <i class="fa fa-star fa-2x"></i>
                                <div class="service-icon p-3">
                                    <i class="fa fa fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4" style="color:black; font-weight: bold;">Accountability</a>
                                    <p class="mb-4" style="color:black"> Taking responsibility for actions and decisions</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                            <i class="fa fa-star fa-2x"></i>
                                <div class="service-icon p-3">
                                    <i class="fa fa- fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4" style="color:black; font-weight: bold;">Innovativeness</a>
                                    <p class="mb-4" style="color:black"> Encouraging creativity and forward-thinking solutions</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                            <i class="fa fa-star fa-2x"></i>
                                <div class="service-icon p-3">
                                    <i class="fa fa- fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4" style="color:black; font-weight: bold;">Excellence</a>
                                    <p class="mb-4"style="color:black"> Striving for the highest quality in all endeavors.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-img">
                            <i class="fa fa-star fa-2x" ></i>
                                <div class="service-icon p-3">
                                    <i class="fa fa fa-2x" style="color:black"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4" style="color:black; font-weight: bold;">Professionalism </a>
                                    <p class="mb-4" style="color:black">Upholding high standards of ethics and integrity.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">

                    </div>
                </div>
            </div>
        </div>
        <!-- core value End -->
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
  </div>

  <!-- //content end -->


<!--  Services start -->
<div class="container-fluid service py-5">
            <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text" style="color:black; font-weight: bold;">Our Services</h4>
                    <h1 class="display-4 mb-4" style="font-weight:bold;">We Provide Best Services</h1>
                    <p class="paragraph1" style="color:black; font-weight: bold;"> The Following Are The Services  Which Are Provided by the School of Professional Engineering (SoPE)</p>

                </div>

                <div class="row g-4 justify-content-center">

                 <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-home fa-2x"></i>
                                </div>
                            </div>

                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4" style='font-weight: bold;' ><?php echo e($services->Service_name); ?></a>
                                    <p class="paragraph1"><?php echo e($services->Service_description); ?></p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
        <!-- service  End-->
        <!-- Service End -->

        <!-- FAQs Start -->
        <div class="container-fluid faq-section bg-light py-3">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <div class="mb-5">
                                <h4 class="text-primary" style="font-weight:bold;">Some Important FAQ's</h4>
                                <h1 class="display-4 mb-0">Common Frequently Asked Questions</h1>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q: Where is the School of Engineering Located ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body rounded">
                                            A: Morogoro
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Q: How will the School of Professional Engineering (SoPE) be implemented?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: The project will use a hybrid model of online courses, face-to-face sessions, and apprenticeships to deliver industry-aligned, innovative, and accessible training for engineering practitioners
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q: Why School of Professional Engineering(Sope) Established?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A:  The School of Professional Engineering (SoPE) project document has been initiated by the Engineers Registration Board (ERB) addresses critical gaps in the engineering professional training in Tanzania
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <img src="img/pexels25.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->



          <!-- News Start -->
          <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">

            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"></h4>
                    <h1 class="display-4 mb-4" style="font-weight:bold;">News And Updates</h1>
                    </div>
                <a href href="#" class="fa fa-newspaper text-primary" style="font-weight:bold;"> All News</a>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item bg-light rounded">
                    <img src="img/images4.jpg" class="img-fluid1" style="" alt="">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">

                            </div>

                            <span class="fa fa-calendar text-dark padding:20px;"  style="padding: 20px"> 30 Dec 2025</span>
                            <span class="fa fa-newspaper text-primary" style="padding: 20px"> Category</span>
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <a href class="texta">STEM Promotion mission at Old Moshi Girls Secondary School</a><hr>
                                   <p class="paragraph22">Early today, September 23, 2024, ERB Registrar Eng. Bernard Kavishe visited Old Moshi Girls School as part of the STEM Promotion Mission, aimed specifically at encouraging girls to pursue studies in Science and Mathematics.</p>
                                    <a href="#" class="btn btn-primary p-0">Read More  <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                    <img src="img/image1.jpg" class="img-fluid1" style="" alt="">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">

                            </div>

                            <span class="fa fa-calendar text-dark padding:20px;"  style="padding: 20px"> 30 Dec 2025</span>
                            <span class="fa fa-newspaper text-primary" style="padding: 20px"> Category</span>
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <a href class="texta">STEM Promotion mission at Old Moshi Girls Secondary School</a><hr>
                                   <p class="paragraph22">Early today, September 23, 2024, ERB Registrar Eng. Bernard Kavishe visited Old Moshi Girls School as part of the STEM Promotion Mission, aimed specifically at encouraging girls to pursue studies in Science and Mathematics.</p>
                                    <a href="#" class="btn btn-primary p-0">Read More  <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                    <img src="img/images2.jpg" class="img-fluid1" style="" alt="">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">

                            </div>

                            <span class="fa fa-calendar text-dark padding:20px;"  style="padding: 20px"> 30 Dec 2025</span>
                            <span class="fa fa-newspaper text-primary" style="padding: 20px"> Category</span>
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <a href class="texta">STEM Promotion mission at Old Moshi Girls Secondary School</a><hr>
                                   <p class="paragraph22">Early today, September 23, 2024, ERB Registrar Eng. Bernard Kavishe visited Old Moshi Girls School as part of the STEM Promotion Mission, aimed specifically at encouraging girls to pursue studies in Science and Mathematics.</p>
                                    <a href="#" class="btn btn-primary p-0">Read More  <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <!-- News End -->

<!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-9">
                        <div class="mb-5">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-5">
                                    <div class="footer-item">
                                        <a href="index.html" class="p-0">
                                            <h3 class="text-white" style="font-weight:bold;"><i class="fab fa-home me-3"></i> SoPE</h3>
                                            </a>
                                        <p class="text-white mb-4">The School of Professional Engineering (SoPE) is a visionary project that aims to enhance the engineering profession in Tanzania by providing high-quality and relevant training for engineering practitioners.</p>
                                        <div class="footer-btn d-flex">
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="footer-item">
                                        <h4 class="text-white mb-4" style="font-weight:bold;">Useful Pages</h4>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Services</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ's</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Blogs</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="footer-item">
                                        <h4 class="mb-4 text-white">Images</h4>
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/images1.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/images1.jpg" data-lightbox="footerInstagram-1" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/images2.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/images2.jpg" data-lightbox="footerInstagram-2" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/images3.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/images3.jpg" data-lightbox="footerInstagram-3" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/images1.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/images1.jpg" data-lightbox="footerInstagram-4" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/images2.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/images2.jpg" data-lightbox="footerInstagram-5" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/images3.jpg.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/images3.jpg" data-lightbox="footerInstagram-6" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">
                            <div class="row g-0">
                                <div class="col-18">
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Address</h4>
                                                    <p class="mb-0">Morogoro</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-envelope fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Mail Us</h4>
                                                    <p class="mb-0">registrar@erb.go.tz/info@erb.go.tz</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fa fa-phone-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Telephone</h4>
                                                    <p class="mb-0"> +255 26 2960086/87</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="footer-item">
                                        <h4 class="text-white mb-4" style="font-weight:bold;">Useful Links</h4>
                                        <a href="www.registration.erb.go.tz"><i class="fas fa-angle-right me-2"></i> ERB MIS</a>
                                        <a href="www.erb.go.tz"><i class="fas fa-angle-right me-2"></i> ERB Website</a>
                                        <a href="www.marathon.erb.go.tz"><i class="fas fa-angle-right me-2"></i> ERB Marathon</a>
                                        <a href="www.event.event.go.tz"><i class="fas fa-angle-right me-2"></i> ERB Event Management System</a>
                                      </div>
                                      </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><script>

</script><i class="date"></i></a>All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-">
                    Designed By<a class="btn btn-white" href="#">ERB</a>  <a class="border-" href="#"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>
<?php /**PATH C:\xampp\htdocs\SoPE\resources\views/welcome.blade.php ENDPATH**/ ?>