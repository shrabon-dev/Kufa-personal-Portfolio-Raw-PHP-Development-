<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="./frontend_page/css/bootstrap.min.css">
        <link rel="stylesheet" href="./frontend_page/css/animate.min.css">
        <link rel="stylesheet" href="./frontend_page/css/magnific-popup.css">
        <link rel="stylesheet" href="./frontend_page/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./frontend_page/css/flaticon.css">
        <link rel="stylesheet" href="./frontend_page/css/slick.css">
        <link rel="stylesheet" href="./frontend_page/css/aos.css">
        <link rel="stylesheet" href="./frontend_page/css/default.css">
        <link rel="stylesheet" href="./frontend_page/css/style.css">
        <link rel="stylesheet" href="./frontend_page/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.php" class="navbar-brand logo-sticky-none"><img src="./frontend_page/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.php" class="navbar-brand s-logo-none"><img src="./frontend_page/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>Portfolio Single POST</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

                <!-- php code start -->
        
                      <?php 
                      $conn = mysqli_connect('localhost','root','','cms');
                      $id =$_GET['id'];

                      $portfolio_select_query = "SELECT * FROM portfolios_info WHERE portfolio_id='$id'";
                      $portfolio_select_mysqli_query = mysqli_query($conn,$portfolio_select_query);
                      $portfolio_array_mysqli_query = mysqli_fetch_assoc($portfolio_select_mysqli_query);
                      ?>
                <!-- php code end -->

            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">
                                    <img src="./beckend/uploads/portfolio/<?=$portfolio_array_mysqli_query['portfolio_img'];?>"  alt="img">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <h2><?=$portfolio_array_mysqli_query['portfolio_title'];?></h2>
                                    <p><?=$portfolio_array_mysqli_query['portfolio_details'];?></p>
                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <li class="blog-post-share">
                                            <a href="#" 
                                                    onclick="
                                                        window.open(
                                                        'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
                                                        'facebook-share-dialog', 
                                                        'width=626,height=436'); 
                                                        return false;">
                                                 <i class="fab fa-facebook"></i>
                                             </a>
                                             <a href="http://www.twitter.com/share?url=http://mysite.org/foo.htm?bar=123&baz=456"><i class="fab fa-twitter"></i></a>
                                                
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img src="./frontend_page/img/blog/post_avatar_img.png" alt="img">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5>Thomas Herlihy</h5>
                                                <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae
                                                    condimem
                                                    egestliberos dolor auctor
                                                    tellus.</p>
                                                <div class="post-avatar-social mt-15">
                                                <a href="#" 
                                                    onclick="
                                                        window.open(
                                                        'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
                                                        'facebook-share-dialog', 
                                                        'width=626,height=436'); 
                                                        return false;">
                                                 <i class="fab fa-facebook"></i>
                                             </a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap primary-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->



		<!-- JS here -->
        <script src="./frontend_page/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./frontend_page/js/popper.min.js"></script>
        <script src="./frontend_page/js/bootstrap.min.js"></script>
        <script src="./frontend_page/js/isotope.pkgd.min.js"></script>
        <script src="./frontend_page/js/one-page-nav-min.js"></script>
        <script src="./frontend_page/js/slick.min.js"></script>
        <script src="./frontend_page/js/ajax-form.js"></script>
        <script src="./frontend_page/js/wow.min.js"></script>
        <script src="./frontend_page/js/aos.js"></script>
        <script src="./frontend_page/js/jquery.waypoints.min.js"></script>
        <script src="./frontend_page/js/jquery.counterup.min.js"></script>
        <script src="./frontend_page/js/jquery.scrollUp.min.js"></script>
        <script src="./frontend_page/js/imagesloaded.pkgd.min.js"></script>
        <script src="./frontend_page/js/jquery.magnific-popup.min.js"></script>
        <script src="./frontend_page/js/plugins.js"></script>
        <script src="./frontend_page/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:14 GMT -->
</html>
