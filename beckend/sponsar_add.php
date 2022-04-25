<?php  
$tab_page_title = "Neptune - Sponsar Add";
?> 
<?php require_once '../include/header.php'; ?>


<!-- /////////////  profile content start  ///////////// -->

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Sponsar Add</h1>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-12">
                          <div class="form_section">
                             <form class="profile_form_set_info services_add_form" action="../php_function/sponsar_fun.php" method="post" enctype="multipart/form-data">
                                 
                                <input type="file" name="sponsar_photo" class="photo_upload">
                                 <label class="h4"> Select Status </label>
                                 <select  class="d-block" name="sponsar_status">
                                     <option value="active">Active</option>
                                     <option value="diactive">Diactive</option>
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

