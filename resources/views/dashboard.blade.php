<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Free mobile app HTML landing page template to help you build a great online presence for your app which will convert visitors into users">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>SIGALANG  - Website penggalangan dana untuk pasien COVID-19</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/fontawesome-all.css" rel="stylesheet">
    <link href="./assets/css/swiper.css" rel="stylesheet">
    <link href="./assets/css/magnific-popup.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">
    
    <!-- Favicon  -->
    <link rel="icon" href="./assets/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Leno</a> -->

        <!-- Image Logo -->
        {{-- <a class="navbar-brand logo-image" href="index.html"><img src="./assets/images/logo.svg" alt="alternative"></a>  --}}
         <h4>SIGALANG</h4>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">COVID-19</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#preview">SUMBANGAN</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link page-scroll" href="#statistic">STATISTIK</a>
                </li> -->
                

                <!-- Dropdown Menu -->          
                <!-- {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#details" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DETAILS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                    </div>
                </li> --}} -->
                <!-- end of dropdown menu -->

                {{-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">DONASI</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/login">LOGIN</a>
                </li> --}}
                 @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                
            </ul>
            {{-- <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://web.facebook.com/audry.calista">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="http://instagram.com/audryraihan">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
            </span> --}}
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1>Dashboard <br> <span id="js-rotating">SIGALANG</span></h1>
                            <p class="p-large">DAFTAR DONATUR SIGALANG</p>
                            {{-- <a class="btn-solid-lg page-scroll" href="#your-link"><i class="fab fa-apple"></i>APP STORE</a>
                            <a class="btn-solid-lg page-scroll" href="#your-link"><i class="fab fa-google-play"></i>PLAY STORE</a> --}}
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            {{-- <img class="img-fluid" src="./assets/images/header-iphone.png" alt="alternative"> --}}
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Testimonials -->
    
    <div class="slider-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card Slider -->
                        <div class="slider-container">
                            <div class="swiper-container card-slider">
                                <div class="swiper-wrapper">
                                    
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="https://w7.pngwing.com/pngs/349/288/png-transparent-teacher-education-student-course-school-avatar-child-face-heroes.png" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Rp.100.000</p>
                                                <p class="testimonial-author">-N-</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="https://www.kvkpratapgarh.org/controller/assets/staff/admin.jpg" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Rp.500.000</p>
                                                <p class="testimonial-author">Hamba Allah</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="https://w7.pngwing.com/pngs/349/288/png-transparent-teacher-education-student-course-school-avatar-child-face-heroes.png" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Rp.50.000</p>
                                                <p class="testimonial-author">Upin</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="https://www.kvkpratapgarh.org/controller/assets/staff/admin.jpg" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Rp.1.000.000</p>
                                                <p class="testimonial-author">Bpk.Samsul</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="https://w7.pngwing.com/pngs/349/288/png-transparent-teacher-education-student-course-school-avatar-child-face-heroes.png" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Rp.125.000</p>
                                                <p class="testimonial-author">-L-</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
            
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="https://www.kvkpratapgarh.org/controller/assets/staff/admin.jpg" alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Rp.135.000</p>
                                                <p class="testimonial-author">-K-</p>
                                            </div>
                                        </div>        
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->
                                
                                </div> <!-- end of swiper-wrapper -->
            
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <!-- end of add arrows -->
            
                            </div> <!-- end of swiper-container -->
                        </div> <!-- end of slider-container -->
                        <!-- end of card slider -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of slider-1 -->

    


    <!-- Video -->
    <div id="preview" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>DONATUR</h2>
                    <div class="p-heading p-large">LIST DONATUR</div>

                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Asal</th>
                          <th scope="col">Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>-N-</td>
                          <td>Bandung</td>
                          <td>Rp.100.000</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Hamba Allah</td>
                          <td>DKI Jakarta</td>
                          <td>Rp.500.000</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>-K-</td>
                          <td>Bali</td>
                          <td>Rp.135.000</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Upin</td>
                          <td>Cibiru</td>
                          <td>Rp.50.000</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Bpk. Samsul</td>
                          <td>Jakarta Selatan</td>
                          <td>Rp.1.000.000</td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>-L-</td>
                          <td>Makassar</td>
                          <td>Rp.125.000</td>
                        </tr>
                      </tbody>
                    </table>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
           
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of video -->

        

    <!-- end of testimonials -->


    <!-- Details Lightboxes -->
    <!-- Lightbox -->
   {{--  <div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-6">
                <img class="img-fluid" src="./assets/images/details-lightbox-1.png" alt="alternative">
            </div>
            <div class="col-lg-6">
                <h3>Goals Setting</h3>
                <hr>
                <p>Leno can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4>User Feedback</h4>
                <p>This is a great app which can help you save time and make your live easier. And it will help improve your productivity levels.</p>
                <p>You should definitely give it a try when you need a good app.</p>
                <table>
                    <tr><td class="icon-cell"><i class="fas fa-desktop"></i></td><td>Responsive layout</td></tr>
                    <tr><td class="icon-cell"><i class="fas fa-bullhorn"></i></td><td>Distinctive CTAs</td></tr>
                    <tr><td class="icon-cell"><i class="fas fa-image"></i></td><td>Image gallery slider</td></tr>
                    <tr><td class="icon-cell"><i class="fas fa-envelope"></i></td><td>Contact forms</td></tr>
                    <tr><td class="icon-cell"><i class="fab fa-font-awesome-flag"></i></td><td>FontAwesome icons</td></tr>
                    <tr><td class="icon-cell"><i class="fas fa-code"></i></td><td>Well-structured code</td></tr>
                </table>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#details">BACK</a> 
            </div>
        </div> >
    </div>  --}}
    <!-- end of lightbox -->
    
    <!-- Lightbox -->
   {{--  <div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-6">
                <img class="img-fluid" src="./assets/images/details-lightbox-2.png" alt="alternative">
            </div>
            <div class="col-lg-6">
                <h3>Calendar Input</h3>
                <hr>
                <p>The calendar input function enables the user to setup training, meditation and relaxation sessions with ease.</p>
                <h4>User Feedback</h4>
                <p>This is a great app which can help you save time and make your live easier. And it will help improve your productivity levels.</p>
                <p>You should definitely give it a try when you need a good app.</p>
                <table>
                    <tr><td class="icon-cell"><i class="fas fa-desktop"></i></td><td>Responsive layout</td></tr>
                    <tr><td class="icon-cell"><i class="fas fa-bullhorn"></i></td><td>Distinctive CTAs</td></tr>
                    <tr><td class="icon-cell"><i class="fas fa-image"></i></td><td>Image gallery slider</td></tr>
                    <tr><td class="icon-cell"><i class="fas fa-envelope"></i></td><td>Contact forms</td></tr>
                    <tr><td class="icon-cell"><i class="fab fa-font-awesome-flag"></i></td><td>FontAwesome icons</td></tr>
                    <tr><td class="icon-cell"><i class="fas fa-code"></i></td><td>Well-structured code</td></tr>
                </table>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#details">BACK</a>
            </div>
        </div> <!>
    </div> --}} <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightboxes -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About Leno</h4>
                        <p>We're passionate about creating the best mobile apps for personal development</p>
                    </div>
                </div> --}} <!-- end of col -->
                {{-- <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="turquoise" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-end of col >
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> --}} <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright ©  <a href="http://instagram.com/audryraihan">Audry Raihan</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
        
    <!-- Scripts -->
    <script src="./assets/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="./assets/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="./assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="./assets/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="./assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="./assets/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="./assets/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="./assets/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="./assets/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>