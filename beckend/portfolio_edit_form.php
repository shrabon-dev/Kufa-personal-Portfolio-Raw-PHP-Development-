<?php  
$tab_page_title = "Neptune - Admin profile";
?> 
<?php require_once '../include/header.php'; ?>

<?php $_SESSION['portfolio_edit_id'] = $_GET['id']; ?>

<!-- /////////////  profile content start  ///////////// -->

<?php  
$id = $_SESSION['portfolio_edit_id'];
 $portfolio_show_query = "SELECT * FROM portfolios_info WHERE portfolio_id='$id'";
 $portfolio_mqsli_query = mysqli_query($conn,$portfolio_show_query);
 $portfolio_mqsli_query_arry = mysqli_fetch_assoc($portfolio_mqsli_query);
?>


                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Portfolio Edit</h1>
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
                             <form class="profile_form_set_info portfolio_add_form" action="../php_function/portfolio_edit.php" method="post" enctype="multipart/form-data">
                                <div>
                                 <label for="">portfolio Cetagory : </label>
                                 <input class="set_icon" type="text" name="portfolio_update_cetagory" value="<?=$portfolio_mqsli_query_arry['portfolio_cetagory'];?>">
                                 </div>
                                 <div><?=(isset( $_SESSION['portfolio_error']))?  $_SESSION['portfolio_error']:''?><?php unset( $_SESSION['error_cetagory']);?></div>

                              
                                  <!--  -->
                                  <div>                                 
                                  <label for="">portfolio Title : </label>
                                  <input type="text" name="portfolio_title" value="<?=$portfolio_mqsli_query_arry['portfolio_title'];?>">
                                  </div>
                                  <div><?=(isset( $_SESSION['error_title']))?  $_SESSION['error_title']:''?><?php unset( $_SESSION['error_title']);?></div>


                                  <!--  -->
                                    <div>
                                      <label for="">portfolio Details : </label>
                                      <textarea class="textarea" name="portfolio_details"><?=$portfolio_mqsli_query_arry['portfolio_details'];?>
                                      </textarea>
                                      </div>
                                      <div><?=(isset( $_SESSION['error_desc']))?  $_SESSION['error_desc']:''?><?php unset( $_SESSION['error_desc']);?></div>

                                       <!--  -->


                                  <!--  -->
                                 <div>
                                 <label for="">portfolio Image : </label>
                                  <input type="file" name="portfolio_img" >
                                 </div>
                                 <!--  -->
                                 <div>
                                 <label for="">portfolio Status : </label>
                                 <select name="portfolio_status" id="">
                                     <option value="active" <?=($portfolio_mqsli_query_arry['portfolio_status']=='active')? 'selected':''?>>Active</option>
                                     <option value="diactive"<?=($portfolio_mqsli_query_arry['portfolio_status']=='diactive')? 'selected':''?>>Diactive</option>
                                 </select>
                                 </div>
                                 <!--  -->
 

                                  <!--  -->
                                 <div><?=(isset( $_SESSION['error_include']))?  $_SESSION['error_include']:''?><?php unset( $_SESSION['error_include']);?></div>

                                 <button type="submit" name="btn_portfolio_add" class="mt-2">Add portfolio</button>
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
