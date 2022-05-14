<?php  
$tab_page_title = "Neptune - Dashboard of user";
?> 

<?php require_once '../include/header.php'; ?>

<!-- /////////////////   main containe start    ///////////////// -->


<!-- php code start -->
<?php
$admin_user_select_query = "SELECT COUNT(*) AS 'user_amount' FROM users_info";
$admin_user_mysqli_query = mysqli_query($conn,$admin_user_select_query);
$user_amount = mysqli_fetch_assoc($admin_user_mysqli_query)['user_amount'];


// ----------------------services_select_query

$services_select_query = "SELECT COUNT(*) AS 'services_amount' FROM services_info";
$services_mysqli_query = mysqli_query($conn,$services_select_query);
$services_amount = mysqli_fetch_assoc($services_mysqli_query)['services_amount'];

// ----------------------counters_select_query

$counters_select_query = "SELECT COUNT(*) AS 'counters_amount' FROM counter_info";
$counter_mysqli_query = mysqli_query($conn,$counters_select_query);
$counters_amount = mysqli_fetch_assoc($counter_mysqli_query)['counters_amount'];

// ----------------------sponsars_select_query

$sponsars_select_query = "SELECT COUNT(*) AS 'sponsars_amount' FROM sponsars";
$sponsars_mysqli_query = mysqli_query($conn,$sponsars_select_query);
$sponsars_amount = mysqli_fetch_assoc($sponsars_mysqli_query)['sponsars_amount'];

// ----------------------portfolios_select_query

$portfolios_select_query = "SELECT COUNT(*) AS 'portfolios_amount' FROM portfolios_info";
$portfolios_mysqli_query = mysqli_query($conn,$portfolios_select_query);
$portfolios_amount = mysqli_fetch_assoc($portfolios_mysqli_query)['portfolios_amount'];

// ----------------------testimonial_select_query

$testimonial_select_query = "SELECT COUNT(*) AS 'testimonial_amount' FROM testimonial_info ";
$testimonial_mysqli_query = mysqli_query($conn,$testimonial_select_query);
$testimonial_amount = mysqli_fetch_assoc($testimonial_mysqli_query)['testimonial_amount'];
?>
<!-- php code end -->


                    <div class="container">
                     
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-primary">
                                                <i class="material-icons-outlined">person</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Active Users</span>
                                                <span class="widget-stats-amount"><?=$user_amount;?></span>
                                                <span class="widget-stats-info">Total Users at this time</span>
                                                
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <i class="material-icons-outlined">miscellaneous_services</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Services</span>
                                                <span class="widget-stats-amount"><?=$services_amount;?></span>
                                                <span class="widget-stats-info">Total Services at this time</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <i class="material-icons-outlined">Counter</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Counter</span>
                                                <span class="widget-stats-amount"><?=$counters_amount;?></span>
                                                <span class="widget-stats-info">Total Counter at this time</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                        <div class="col-xl-6">
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <?php  
                                               $total_user = "SELECT COUNT(*) as 'total_user_amout' FROM users_info; ";
                                               $total_user_query = mysqli_query($conn,$total_user);
                                               $total_user_arry = mysqli_fetch_assoc($total_user_query);                                        
                                        ?>
                                        <h5 class="card-title">All Users<span class="badge badge-success badge-style-light"><?=$total_user_arry['total_user_amout'];?> total</span></h5>
                                    </div>
                                    <div class="card-body">
                                      
                                        <ul class="widget-list-content list-unstyled" style="overflow-y: scroll; height:400px">
                                           <?php     
                                        
                                               $user_select = "SELECT user_id,user_name,user_email FROM users_info";
                                               $user_query = mysqli_query($conn,$user_select);
   

                                                 while( $user_arry = mysqli_fetch_assoc($user_query)){
                                                   ?>
                                              <li class="widget-list-item widget-list-item-black">
                                                <span class="widget-list-item-avatar">
                                                    <div class="avatar avatar-rounded">
                                                        <div class="avatar-title"><?=$user_arry['user_id'];?></div>
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                       <?=$user_arry['user_name'];?>
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                    <?=$user_arry['user_email'];?>
                                                    </span>
                                                </span>
                                            </li>
                                            <?php }?>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="col-lg-6">
                            <div class="row">
                            <div class="col-xl-12">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <i class="material-icons-outlined">support</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Sponsars</span>
                                                <span class="widget-stats-amount"><?=$sponsars_amount;?></span>
                                                <span class="widget-stats-info">Total Sponsars at this time</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <i class="material-icons-outlined">workspaces</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Portfolios</span>
                                                <span class="widget-stats-amount"><?=$portfolios_amount;?></span>
                                                <span class="widget-stats-info">Total Portfolios at this time</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <i class="material-icons-outlined">reviews</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Testimonials</span>
                                                <span class="widget-stats-amount"><?=$testimonial_amount;?></span>
                                                <span class="widget-stats-info">Total Testimonial at this time</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
<!-- /////////////////   main containe end    ///////////////// -->
                 
<?php require_once '../include/footer.php'; ?>
