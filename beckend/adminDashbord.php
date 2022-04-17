<?php  
$tab_page_title = "Neptune - Dashboard of user";
?> 

<?php require_once '../include/header.php'; ?>

<!-- /////////////////   main containe start    ///////////////// -->

                    <div class="container">
                     
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-primary">
                                                <i class="material-icons-outlined">paid</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Today's Sales</span>
                                                <span class="widget-stats-amount">$38,211</span>
                                                <span class="widget-stats-info">471 Orders Total</span>
                                            </div>
                                            <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                                                <i class="material-icons">keyboard_arrow_down</i> 4%
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
                                                <i class="material-icons-outlined">person</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Active Users</span>
                                                <span class="widget-stats-amount">23,491</span>
                                                <span class="widget-stats-info">790 unique this month</span>
                                            </div>
                                            <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                                <i class="material-icons">keyboard_arrow_up</i> 12%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-danger">
                                                <i class="material-icons-outlined">file_download</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Downloads</span>
                                                <span class="widget-stats-amount">140,390</span>
                                                <span class="widget-stats-info">87 items downloaded</span>
                                            </div>
                                            <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                                <i class="material-icons">keyboard_arrow_up</i> 7%
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
                        </div>
                    </div>
                    
<!-- /////////////////   main containe end    ///////////////// -->
                 
<?php require_once '../include/footer.php'; ?>
