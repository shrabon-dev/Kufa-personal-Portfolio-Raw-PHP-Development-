<?php  
$tab_page_title = "Neptune - Sponsar Edit";
?> 
<?php require_once '../include/header.php'; ?>


<!-- /////////////  profile content start  ///////////// -->

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Sponsar Edit</h1>
                               </div>
                            </div>
                        </div>

                                         <!-- php code start -->
                                             <?php
                                             $id = $_SESSION['edit_id'];
                                             $conn = mysqli_connect('localhost','root','','cms');
                                             $select_query = "SELECT * FROM sponsars WHERE sponsar_id='$id'";
                                             $mysqli_query = mysqli_query($conn,$select_query);
                                             $mysqli_fetch_array = mysqli_fetch_array($mysqli_query);
                                             
                                             ?>
                                          <!-- php code end -->

                        <div class="row">
                        <div class="col-lg-12">
                          <div class="form_section">
                             <form class="profile_form_set_info services_add_form" action="../php_function/sponsar_edit_from_fun.php" method="post" enctype="multipart/form-data">
                                 
                                <input type="file" name="sponsar_photo" class="photo_upload" value="<?=$mysqli_fetch_array['sponsar_img']?>">
                                 <label class="h4"> Select Status </label>
                                 <select  class="d-block" name="sponsar_status">
                                 <option value="active" <?=($mysqli_fetch_array['sponsar_status']=='active')? 'Selected':''?> >Active</option>
                                     <option value="diactive" <?=($mysqli_fetch_array['sponsar_status']=='diactive')? 'Selected':''?>>Diactive</option>
                                 
                                 </select>
                                 
                                 <button type="submit" name="btn_sponsar_add" class="mt-5">Add Sponsar</button>
                                </form>
                          </div>


                        </div>
                    </div>

                    <!-- /////////////  profile content end  ///////////// -->


                    <!-- ------------------------------------------------
                                   script start
                -------------------------------------------------------------- -->

 

<?php require_once '../include/footer.php'; ?>

