<?php  
$tab_page_title = "Neptune - Admin profile";
?> 
<?php require_once '../include/header.php'; ?>


<!-- /////////////  profile content start  ///////////// -->

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Services Add</h1>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-12">
                          <div class="form_section">
                             <form class="profile_form_set_info services_add_form" action="../php_function/services_func.php" method="post">
                                 <label for="">Service Title : </label>
                                 <input type="text" name="service_title">
                                  <!--  -->


                                  <!--  -->
                                 <div>
                                 <label for="">Service Icon : </label>
                                 <input type="text" name="service_icon">
                                 </div>
                                       <!--  -->


                                  <!--  -->
                                 <div>
                                 <label for="">Service Description : </label>
                                 <textarea class="textarea" name="service_description"></textarea>

                                 </div>
                                 <div><?=(isset( $_SESSION['error_desc']))?  $_SESSION['error_desc']:''?><?php unset( $_SESSION['error_desc']);?></div>
                                 <!--  -->
                                 <div>
                                 <label for="">Service Status : </label>
                                 <select name="service_status" id="">
                                     <option value="active">Active</option>
                                     <option value="diactive">Diactive</option>
                                 </select>
                                 </div>
                                 <!--  -->
 

                                  <!--  -->
                                 <div><?=(isset( $_SESSION['error_include']))?  $_SESSION['error_include']:''?><?php unset( $_SESSION['error_include']);?></div>

                                 <button type="submit" name="btn_service_add" class="mt-2">Add Service</button>
                                </form>
                          </div>

















                       

                        </div>
                    </div>

                    <!-- /////////////  profile content end  ///////////// -->


<?php require_once '../include/footer.php'; ?>