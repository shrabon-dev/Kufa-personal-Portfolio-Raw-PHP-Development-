<?php  
$tab_page_title = "Neptune - Admin profile";
?> 
<?php require_once '../include/header.php'; ?>


<!-- /////////////  profile content start  ///////////// -->

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Counter Add</h1>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-12">
                          <div class="form_section">
                             <form class="profile_form_set_info counters_add_form" action="../php_function/counter_func.php" method="post">
                                 <label for="">counter Title : </label>
                                 <input type="text" name="counter_title">
                                  <!--  -->


                                  <!--  -->
                                 <div>
                                 <label for="">counter Icon : </label>
                                 <input type="text" name="counter_icon">
                                 </div>
                                       <!--  -->


                                  <!--  -->
                                 <div>
                                 <label for="">counter Amont : </label>
                                 <input type="number" name="counter_amount">

                                 </div>
                                 <div><?=(isset( $_SESSION['error_desc']))?  $_SESSION['error_desc']:''?><?php unset( $_SESSION['error_desc']);?></div>
                                 <!--  -->
                                 <div>
                                 <label for="">counter Status : </label>
                                 <select name="counter_status" id="">
                                     <option value="active">Active</option>
                                     <option value="diactive">Diactive</option>
                                 </select>
                                 </div>
                                 <!--  -->
 

                                  <!--  -->
                                 <div><?=(isset( $_SESSION['error_include']))?  $_SESSION['error_include']:''?><?php unset( $_SESSION['error_include']);?></div>

                                 <button type="submit" name="btn_counter_add" class="mt-2">Counter Add</button>
                                </form>
                          </div>

















                       

                        </div>
                    </div>

                    <!-- /////////////  profile content end  ///////////// -->


<?php require_once '../include/footer.php'; ?>