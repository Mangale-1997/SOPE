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
                                    <a href="{{route('view-whoweare')}}" class="dropdown-item">Who We Are</a>
                                    <a href="team.html" class="dropdown-item">Who We Serve</a>
                                    <a href="testimonial.html" class="dropdown-item">Organisation Structure</a>

                                </div>
                            </div>
                            <a href="{{route('view-services')}}" class="nav-item nav-link">Services</a>
                            <a href="" class="nav-item nav-link">Articles</a>
                            <a href="service.html" class="nav-item nav-link">Gallery</a>
                            <a href="blog.html" class="nav-item nav-link">Fee</a>
                            <a href="{{route('viewcontact')}}" class="nav-item nav-link">Contact</a>
                            <a href="https://www.erb.go.tz" class="nav-item nav-link">ERB-Website</a>
                            </div>
                            </div>
                           </div>
                          </nav>
                         </div>
                         </div>
        <!-- Navbar & Hero End -->
<!--  Services start -->
<div class="container-fluid service py-5">
            <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Services</h4>
                    <h1 class="display-4 mb-4">We Provide Best Services</h1>
                    <p class="paragraph1" > The Following Are The Services  Which Are Provided by the School of Professional Engineering (SoPE)</p>

                </div>

                <div class="row g-4 justify-content-center">

                 @foreach($data_services as $services)
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
                                    <a href="#" class="d-inline-block h4 mb-4" style='font-weight: bold;'>{{$services->Service_name}}</a>
                                    <p class="paragraph1">{{$services->Service_description}}</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- service  End-->
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
                                            <h3 class="text-white"><i class="fab fa-home me-3"></i> SoPE</h3>
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
                                        <h4 class="text-white mb-4">Useful Pages</h4>
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
                                        <h4 class="text-white mb-4">Useful Links</h4>
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
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>