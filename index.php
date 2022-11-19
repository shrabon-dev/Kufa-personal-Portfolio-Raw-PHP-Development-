<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="./frontend_page/img/favicon.png">
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
        <!-- <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div> -->
        <!-- preloader-end -->

        <!-- php code start -->
<?php
                    $conn = mysqli_connect('localhost','root','','cms');     
                        
                    $settings_show_select_query = "SELECT settings_value FROM settings_info WHERE settings_name='Owner_Name'";
                    mysqli_query($conn,$settings_show_select_query);
                    $owner_name_show = mysqli_fetch_assoc( mysqli_query($conn,$settings_show_select_query))['settings_value'];

?>

<?php
                      
                    $settings_show_owner_details_select_query = "SELECT settings_value FROM settings_info WHERE settings_name='Owner_Details'";
                    mysqli_query($conn,$settings_show_owner_details_select_query);
                    $owner_details_show = mysqli_fetch_assoc( mysqli_query($conn,$settings_show_owner_details_select_query))['settings_value'];

?>
                     <?php
                      
                      $settings_show_about_details_select_query = "SELECT settings_value FROM settings_info WHERE settings_name='About_Details'";
                      mysqli_query($conn,$settings_show_about_details_select_query);
                      $about_details_show = mysqli_fetch_assoc( mysqli_query($conn,$settings_show_about_details_select_query))['settings_value'];
                      
                      ?>
<!-- php code end -->
<!-- php code start -->
<?php
  
                      $Owner_Address_select_query = "SELECT settings_value FROM settings_info WHERE settings_name='Owner_Address'";
                      mysqli_query($conn,$settings_show_select_query);
                      $owner_address_show = mysqli_fetch_assoc( mysqli_query($conn,$Owner_Address_select_query))['settings_value'];
                      
                      ?>
                      
                      <?php
                                            
                      $settings_show_footer_details_select_query = "SELECT settings_value FROM settings_info WHERE settings_name='Footer_details'";
                      mysqli_query($conn,$settings_show_select_query);
                      $footer_details_show = mysqli_fetch_assoc( mysqli_query($conn,$settings_show_footer_details_select_query))['settings_value'];
                      
                      
                      $settings_show_Owner_Phone_select_query = "SELECT settings_value FROM settings_info WHERE settings_name='Owner_Phone'";
                      mysqli_query($conn,$settings_show_select_query);
                      $owner_phone_show = mysqli_fetch_assoc( mysqli_query($conn,$settings_show_Owner_Phone_select_query))['settings_value'];
                      
                      
                      
                      $settings_show_owner_email_select_query = "SELECT settings_value FROM settings_info WHERE settings_name='Owner_email'";
                      mysqli_query($conn,$settings_show_select_query);
                      $Owner_email_show = mysqli_fetch_assoc( mysqli_query($conn,$settings_show_owner_email_select_query))['settings_value'];
                      
                      
                      ?>
                      <!-- php code end -->

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
                        <img src="./frontend_page/img/logo/logo.png" alt="logo.png" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$owner_address_show?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$owner_phone_show?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$Owner_email_show?></p>
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



            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=$owner_name_show;?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$owner_details_show;?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="./frontend_page/img/banner/banner_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="./frontend_page/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="./frontend_page/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?=$about_details_show;?></p>
                                <h3>Education:</h3>
                            </div>

                            <!-- php code start -->
                            <?php 
                           
                            $about_select_query = "SELECT * FROM about_info WHERE about_status='active'";
                            $about_select_mysqli_query = mysqli_query($conn,$about_select_query);
     
                            ?>
                            <!-- php code  end -->

                            <!-- Education Item -->
                            <?php foreach( $about_select_mysqli_query as $about_values): ?>
                            <div class="education">
                                <div class="year"><?=$about_values['about_year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$about_values['about_title']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$about_values['about_skill']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- End Education Item -->
                         
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">

                       <!-- php code start -->
                      <?php 
                      
                      $services_select_query = "SELECT * FROM services_info WHERE service_status='Active'";
                      $services_select_mysqli_query = mysqli_query($conn,$services_select_query);

                      ?>

                        
                        <?php foreach($services_select_mysqli_query as $service_arry_query): ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class=" <?=$service_arry_query['service_icon'];?>"></i>
								<h3><?=$service_arry_query['service_title'];?></h3>
								<p>
                                <?=$service_arry_query['service_description'];?>
								</p>
							</div>
						</div>

                        <?php endforeach; ?>

                       <!-- php code end -->
				
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                   <!-- php code start -->
                   <?php 
                      
                      
                      $portfolio_select_query = "SELECT * FROM portfolios_info WHERE portfolio_status='active'";
                      $portfolio_select_mysqli_query = mysqli_query($conn,$portfolio_select_query);

                    

                      ?>
                   <!-- php code end -->
                       <?php foreach($portfolio_select_mysqli_query as $portfolio_value): ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img style="height: 360px; display:block;" src="./beckend/uploads/portfolio/<?=$portfolio_value['portfolio_img'];?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?=$portfolio_value['portfolio_cetagory'];?></span>
									<h4><a href="portfolio-single.php?id=<?=$portfolio_value['portfolio_id'];?>"><?=$portfolio_value['portfolio_title'];?></a></h4>
									<a href="portfolio-single.php?id=<?=$portfolio_value['portfolio_id'];?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <?php endforeach;?>
                      
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                                  <!-- counter php code start -->
                      <?php 
                      
                                  $conn = mysqli_connect('localhost','root','','cms');
                                  $counter_select_query = "SELECT * FROM counter_info WHERE counter_status='Active'";
                                  $counter_select_mysqli_query = mysqli_query($conn,$counter_select_query);
                      ?>

                                <!-- counter php code end -->
                           
                                <?php foreach($counter_select_mysqli_query as  $counter_list): ?>

                              <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$counter_list['counter_icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$counter_list['counter_amount']?></span></h2>
                                        <span><?=$counter_list['counter_title']?></span>
                                    </div>
                                </div>
                            </div>

                            <?php  endforeach;  ?>
                     
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

                  <!-- php code start -->
                  <?php 
                      
                      
                      $testimonial_select_query = "SELECT * FROM testimonial_info WHERE testimonial_status='active'";
                      $testimonial_select_mysqli_query = mysqli_query($conn,$testimonial_select_query);

                      ?>
                   <!-- php code end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                                <?php foreach($testimonial_select_mysqli_query as $testi_value): ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img style="width: 120px; height:120px; border-radius:50%;" src="./beckend/uploads/testimonial/<?=$testi_value['testimonial_img'];?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?=$testi_value['testimonial_details'];?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$testi_value['testimonial_name'];?></h5>
                                            <span><?=$testi_value['testimonial_position'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">

 
                       <!-- php code start -->
                        <?php
                        $conn = mysqli_connect('localhost','root','','cms');
                        $sponsar_select_query = "SELECT * FROM sponsars WHERE sponsar_status='active' ";
                        mysqli_query($conn,$sponsar_select_query);
                        ?>
                       <!-- php code end -->

                        <?php foreach(mysqli_query($conn,$sponsar_select_query) as $sponsar_value): ?>

                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img style="width: 120px; height:100px;" src="./beckend/uploads/sponsar/<?=$sponsar_value['sponsar_img']?>" alt="img">
                            </div>
                        </div>
                        <?php endforeach; ?>
                       
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->



            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p><?=$footer_details_show;?></p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$owner_address_show;?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$owner_phone_show;?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span></span><?=$Owner_email_show;?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <div style="color:green;">
                                    <?php if(isset($_SESSION['message_success'])){
                                    echo "<span>". $_SESSION['message_success'] ."</span>";}
                                    unset($_SESSION['message_success']); ?>
                                    </div>
                                <form action="./beckend/input_form_func.php" method="POST">
                                    <input type="text" placeholder="your name *" name="messanger_name"> 

                                    <div style="color:red;">
                                    <?php if(isset($_SESSION['messanger_name_error'])){
                                    echo "<span>". $_SESSION['messanger_name_error'] ."</span>";}
                                    unset($_SESSION['messanger_name_error']); ?>
                                    </div>

                                    <input type="email" placeholder="your email *" name="messanger_email">

                                    <div style="color:red;">
                                    <?php if(isset($_SESSION['messanger_email_error'])){
                                    echo "<span>". $_SESSION['messanger_email_error'] ."</span>";}
                                    unset($_SESSION['messanger_email_error']); ?>
                                    </div>

                                    <input type="text" placeholder="Subject *" name="message_subject">

                                    <div style="color:red;">
                                    <?php if(isset($_SESSION['message_subject_error'])){
                                    echo "<span>". $_SESSION['message_subject_error'] ."</span>";}
                                    unset($_SESSION['message_subject_error']); ?>
                                    </div>

                                    <textarea name="message" id="message" placeholder="your message *"></textarea>

                                    <div style="color:red;">
                                    <?php if(isset($_SESSION['message_error'])){
                                    echo "<span>". $_SESSION['message_error'] ."</span>";}
                                    unset($_SESSION['message_error']); ?>
                                    </div>

                                    <button name="message_btn" class="btn mt-4" type="submit">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
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

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
