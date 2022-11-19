<?php  
$tab_page_title = "Neptune - Admin profile";
?> 
<?php require_once '../include/header.php'; ?>

<?php $_SESSION['testmonial_edit_id'] = $_GET['id']; ?>

<!-- /////////////  profile content start  ///////////// -->

<?php  
$id = $_SESSION['testmonial_edit_id'];
 $testi_show_query = "SELECT * FROM testimonial_info WHERE testimonial_id='$id'";
 $testi_mqsli_query = mysqli_query($conn,$testi_show_query);
 $testi_mqsli_query_arry = mysqli_fetch_assoc($testi_mqsli_query);
?>


                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Teatimonial Edit</h1>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-8">
                          <div class="form_section">
                              <?php if(isset($_SESSION['data_include'])):?>
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  <strong> <?=$_SESSION['data_include'];?> </strong> 
                                </div>
                                
                                <script>
                                  var alertList = document.querySelectorAll('.alert');
                                  alertList.forEach(function (alert) {
                                    new bootstrap.Alert(alert)
                                  })
                                </script>
                                
                                <?php endif; unset($_SESSION['data_include']);?>
                             <form class="profile_form_set_info testimonial_add_form" action="../php_function/testimonial_edit.php" method="post" enctype="multipart/form-data">
                                <div>
                                 <label for="">Testimonial Name : </label>
                                 <input class="set_icon" type="text" name="testimonial_update_name" value="<?=$testi_mqsli_query_arry['testimonial_name'];?>">
                                 </div>
                                 <div><?=(isset( $_SESSION['error_cetagory']))?  $_SESSION['error_cetagory']:''?><?php unset( $_SESSION['error_cetagory']);?></div>

                              
                                  <!--  -->
                                  <div>                                 
                                  <label for="">Testimonial Position : </label>
                                  <input type="text" name="testimonial_position" value="<?=$testi_mqsli_query_arry['testimonial_position'];?>">
                                  </div>
                                  <div><?=(isset( $_SESSION['error_title']))?  $_SESSION['error_title']:''?><?php unset( $_SESSION['error_title']);?></div>


                                  <!--  -->
                                    <div>
                                      <label for="">Testimonial Details : </label>
                                      <textarea class="textarea" name="testimonial_details"><?=$testi_mqsli_query_arry['testimonial_details'];?>
                                      </textarea>
                                      </div>
                                      <div><?=(isset( $_SESSION['error_desc']))?  $_SESSION['error_desc']:''?><?php unset( $_SESSION['error_desc']);?></div>

                                       <!--  -->


                                  <!--  -->
                                 <div>
                                 <label for="">Testimonial Image : </label>
                                  <input type="file" name="testimonial_img" >
                                 </div>
                                 <div><?=(isset( $_SESSION['error_img']))?  $_SESSION['error_img']:''?><?php unset( $_SESSION['error_img']);?></div>
                                 <!--  -->
                                 <div>
                                 <label for="">Testimonial Status : </label>
                                 <select name="testimonial_status" id="">
                                     <option value="active" <?=($testi_mqsli_query_arry['testimonial_status']=='active')? 'selected':''?>>Active</option>
                                     <option value="diactive"<?=($testi_mqsli_query_arry['testimonial_status']=='diactive')? 'selected':''?>>Diactive</option>
                                 </select>
                                 </div>
                                 <!--  -->
 

                                  <!--  -->
                                 <div><?=(isset( $_SESSION['error_include']))?  $_SESSION['error_include']:''?><?php unset( $_SESSION['error_include']);?></div>

                                 <button type="submit" name="btn_testimonial_add" class="mt-4">Update</button>
                                </form>
                          </div>

















                       

                        </div>
                    </div>

                    <!-- /////////////  profile content end  ///////////// -->


                    <!-- ------------------------------------------------
                                   script start
                -------------------------------------------------------------- -->

 

<?php require_once '../include/footer.php'; ?>
<script>


$(document).ready(function(){

   $('.icon_slc_btn').click(function(){

       $('.set_icon').val($(this).attr("id"));

  

   })


})


</script>
