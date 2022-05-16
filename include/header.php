<?php session_start(); ?>
<?php if(!isset($_SESSION['login_statuse'])){
  header("location: error.php");
}

?>
<?php $conn = mysqli_connect('localhost','root','','cms'); ?>
<?php
$current_page_find =explode('/',$_SERVER['PHP_SELF']);

$current_page = end($current_page_find);

// profile photo name select from database

$admin_user_id = $_SESSION['admin_user_id'];
$profile_photo_search_query = "SELECT profile_images FROM users_info WHERE user_id='$admin_user_id'";

$profile_photo_search_query_db = mysqli_query($conn,$profile_photo_search_query);
$profile_photo_search_query_db_arr = mysqli_fetch_assoc($profile_photo_search_query_db);

$profile_photo_name_db = $profile_photo_search_query_db_arr['profile_images'];


$_SESSION['profile_photo_name_db'] = $profile_photo_name_db;

$profile_photo_name_db = $_SESSION['profile_photo_name_db'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title><?=(isset($current_page))? $tab_page_title:'';?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">
    <link href="../assets/css/style_two.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="#" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="../beckend/uploads/profile_images/<?=$profile_photo_name_db?>" style="display:block; width: 60px; height:60px; border-radius:50%;">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?=$_SESSION['admin_user_name']?><br><span class="user-state-info"><?=$_SESSION['admin_user_email']?></span></span>
                        <span class="user-info-text mb-2"><?=$_SESSION['admin_user_phone'];?></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="<?=($current_page == 'adminDashbord.php')? 'active-page':''?>">
                        <a href="adminDashbord.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>

<!-- php code of mailbox start  -->

<?php

$message_select_query = "SELECT COUNT(*) AS 'messages_amount' FROM messages";
$messages_mysqli_query = mysqli_query($conn,$message_select_query);
$messages_amount = mysqli_fetch_assoc($messages_mysqli_query)['messages_amount'];
?>
<!-- php code of mailbox end  -->


                    <li>
                        <a href="../beckend/mailbox.php"><i class="material-icons-two-tone">inbox</i>Mailbox<span class="badge rounded-pill badge-danger float-end"><?=$messages_amount;?></span></a>
                    </li>
                    <li class="<?=($current_page == 'profile.php')? 'active-page':''?>">
                        <a href="profile.php"><i class="material-icons-two-tone">account_circle</i>Admin Profile</a>
                    </li>
                    <li>
                        <a href="../index.php" target="_blank"><i class="material-icons-two-tone">home</i>Visit Site</a>
                    </li>
                    <li>
                        <a href="../beckend/setting_form_update.php"><i class="material-icons-two-tone">settings</i>Setting</a>
                    </li>
                    <li class="">
                        <a href=""><i class="material-icons-two-tone">person</i>About me<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                         <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="../beckend/about_me_add.php"> <i class="material-icons-two-tone">add</i> About Add</a>
                            </li>
                            <li>
                                <a href="../beckend/about_me_list.php"><i class="material-icons-two-tone">list_alt</i> About List</a>
                            </li>
                        </ul>  
                     </li>
                    <li class="">
                        <a href=""><i class="material-icons-two-tone">miscellaneous_services</i>Services<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                         <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="../beckend/service_add.php"> <i class="material-icons-two-tone">add</i> Service Add</a>
                            </li>
                            <li>
                                <a href="../beckend/service_list.php"><i class="material-icons-two-tone">list_alt</i> Service List</a>
                            </li>
                        </ul>  
                     </li>
                     <li class="">
                        <a href=""><i class="material-icons-two-tone">timer</i>Counter<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="../beckend/counter_add.php"> <i class="material-icons-two-tone">add</i> Counter Add</a>
                            </li>
                            <li>
                                <a href="../beckend/counter_list.php"><i class="material-icons-two-tone">list_alt</i> Counter List</a>
                            </li>
                        </ul>  
                     </li>
                     <li class="">
                        <a href=""><i class="material-icons-two-tone">support</i>Sponsar<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="../beckend/sponsar_add.php"> <i class="material-icons-two-tone">add</i> Sponsar Add</a>
                            </li>
                            <li>
                                <a href="../beckend/sponsar_list.php"><i class="material-icons-two-tone">view_list</i> Sponsar List</a>
                            </li>
                        </ul>  
                     </li>

                     <li class="">
                        <a href=""><i class="material-icons-two-tone">workspaces</i>Portfolio<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="../beckend/portfolio_add.php"> <i class="material-icons-two-tone">add</i> Portfolio Add</a>
                            </li>
                            <li>
                                <a href="../beckend/portfolio_list.php"><i class="material-icons-two-tone">view_list</i> Portfolio List</a>
                            </li>
                        </ul>  
                     </li>
                     <li class="">
                        <a href=""><i class="material-icons-two-tone">reviews</i>Testimonial<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="../beckend/testimonial_add.php"> <i class="material-icons-two-tone">add</i> Testimonial Add</a>
                            </li>
                            <li>
                                <a href="../beckend/testimonial_list.php"><i class="material-icons-two-tone">view_list</i> Testimonial List</a>
                            </li>
                        </ul>  
                     </li>
              
                    </ul>
              
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
            
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                
                                <li class="nav-item">
                                    <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown" data-bs-toggle="dropdown"><img src="../assets/images/flags/us.png" alt=""></a>
                                        <ul class="dropdown-menu dropdown-menu-end language-dropdown" aria-labelledby="languageDropDown">
                                            <li><a class="dropdown-item" href="#"><img src="../assets/images/flags/germany.png" alt="">German</a></li>
                                            <li><a class="dropdown-item" href="#"><img src="../assets/images/flags/italy.png" alt="">Italian</a></li>
                                            <li><a class="dropdown-item" href="#"><img src="../assets/images/flags/china.png" alt="">Chinese</a></li>
                                        </ul>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#" data-bs-toggle="dropdown">4</a>
                                    <div class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="notificationsDropDown">
                                        <h6 class="dropdown-header">Notifications</h6>
                                        <div class="notifications-dropdown-list">
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-info text-white">
                                                            <i class="material-icons-outlined">campaign</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Donec tempus nisi sed erat vestibulum, eu suscipit ex laoreet</p>
                                                        <small>19:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-danger text-white">
                                                            <i class="material-icons-outlined">bolt</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Quisque ligula dui, tincidunt nec pharetra eu, fringilla quis mauris</p>
                                                        <small>18:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-success text-white">
                                                            <i class="material-icons-outlined">alternate_email</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Nulla id libero mattis justo euismod congue in et metus</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="../assets/images/avatars/avatar.png" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent sodales lobortis velit ac pellentesque</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="../assets/images/avatars/avatar.png" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent lacinia ante eget tristique mattis. Nam sollicitudin velit sit amet auctor porta</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../login.php"><i class="material-icons">logout</i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <!-- /////////////  header section end   ////////// -->