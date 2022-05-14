<?php  
$tab_page_title = "Neptune - Admin profile";
?> 
<?php require_once '../include/header.php'; ?>


<!-- /////////////  profile content start  ///////////// -->

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Profile Sitting</h1>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form_section">
                                

                        <!-- ============= update message start =============== -->
                  <?php if(isset($_SESSION['submit'])): ?>
                    <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                       <div class="alert-content">
                               <span class="alert-title">Success!</span>
                               <span class="alert-text"> <?=$_SESSION['update_massage'];?> </span>
                           </div>
                       </div>
                   <?php endif; unset($_SESSION['submit']);?>
                       <!-- ============= update message end =============== -->

                                <form class="profile_form_set_info " action="../php_function/profile_sitting.php" method="post">
                                 <label for="">Change name  <span>:</span> </label>
                                 <input class="mb-2" type="text" name="change_name" value="<?=(isset( $_SESSION['admin_user_name']))?  $_SESSION['admin_user_name']:''?>">
                                 <button type="submit" name="btn_name_change">Change</button>
                                </form>
                                
                                <form class="profile_form_set_info" action="../php_function/profile_sitting.php" method="post">
                                 <label for="">Change email  <span>:</span> </label>
                                 <input class="mb-2" type="text" name="change_email" value="<?=(isset(  $_SESSION['admin_user_email']))?   $_SESSION['admin_user_email']:''?>">
                                 <button type="submit" name="btn_email_change">Change</button>
                                </form>
                            
                                <!--  -->
                            
                                <form class="profile_form_set_info " action="../php_function/profile_sitting.php" method="post">
                                 <label for="">Add Phone Number  <span>:</span> </label>
                                 <input class="mb-2" type="phone" name="add_phone" value="<?=(isset($_SESSION['admin_user_phone']))?   $_SESSION['admin_user_phone']:''?>">
                                 <button type="submit" name="btn_phone_add">Change</button>
                                </form>
                              
                                <!--  -->

                             
                                <!--  -->

                                <form class="profile_form_set_info" action="../php_function/profile_sitting.php" method="post" enctype="multipart/form-data">
                                 <label for="">Set profile picture  <span>:</span> </label>
                                 <input class="mt-2" type="file" name="profile_photo">
                                 <button type="submit" name="btn_profile_photo">upload</button>

                                 <div class="text-danger"> <?=(isset(  $_SESSION['error__profile__msge']))?   $_SESSION['error__profile__msge']:''?>
                                 <?php unset($_SESSION['error__profile__msge']);?></div>

                                </form>
                                </div>
                            </div>


                        <div class="col-lg-4">
                          <div class="form_section">
                             <form class="profile_form_set_info" action="../php_function/profile_sitting.php" method="post">
                                 <label for="">Curent Password : </label>
                                 <input type="password" name="current_password_cng">
                                  <!--  -->
                                  <?php if(isset($_SESSION['pass_error_update'])): ?>
                                  <div class="error" style="color: red; font-size:12px">
                                  <?=$_SESSION['pass_error_update']?>
                                  </div>
                                  <?php endif; unset($_SESSION['pass_error_update']);?>

                                  <!--  -->
                                 <div>
                                 <label for="">New Password : </label>
                                 <input type="password" name="new_password_cng">
                                 </div>
                                       <!--  -->
                                       <?php if(isset($_SESSION['password__erorr'])): ?>
                                  <div class="error" style="color: red; font-size:12px">
                                  <?=$_SESSION['password__erorr']?>
                                  </div>
                                  <?php endif; unset($_SESSION['password__erorr']);?>

                                  <!--  -->
                                 <div>
                                 <label for="">Confirm Password : </label>
                                 <input type="password" name="confirm_password_cng">
                                 </div>
                                 <!--  -->
                                       <?php if(isset($_SESSION['confirm_password__erorr'])): ?>
                                  <div class="error" style="color: red; font-size:12px">
                                  <?=$_SESSION['confirm_password__erorr']?>
                                  </div>
                                  <?php endif; unset($_SESSION['confirm_password__erorr']);?>

                                  <!--  -->
                                 <button type="submit" name="btn_password_change" class="mt-2">Change</button>
                                </form>
                          </div>
                        </div>

                        </div>
                    </div>

                    <!-- /////////////  profile content end  ///////////// -->


<?php require_once '../include/footer.php'; ?>