<?php  
$tab_page_title = "Neptune - Admin About me";
?> 
<?php require_once '../include/header.php'; require_once "font_awesome.php";?>




<!-- /////////////  profile content start  ///////////// -->

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Settings Edit</h1>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-12">

<!-- php code start -->
<?php
 $id = $_GET['id'];
 $about_select_query_for_show = "SELECT * FROM about_info WHERE about_id='$id'";
 $about_mysqli_query_for_show = mysqli_query($conn,$about_select_query_for_show);
 $about_mysqli_array_query_for_show= mysqli_fetch_assoc($about_mysqli_query_for_show);
?>
<!-- php code end -->

                          <div class="form_section">
                             <form class="profile_form_set_info counters_add_form" action="../php_function/settings_edit_func.php" method="post">
                                
                               
  
                                <!-- php code start -->
                                  <?php
                                  $settings_select_query = "SELECT settings_name, settings_value FROM settings_info";
                                  $settings_mysqli_query = mysqli_query($conn,$settings_select_query);

                                  ?>
                                <!-- php code end -->

                                <?php foreach($settings_mysqli_query as $settings_velue): ?>     
                                <div>
                                <label for=""><?=$settings_velue['settings_name'];?> : </label>
                                <input type="text" name="<?=$settings_velue['settings_name'];?>" value="<?=$settings_velue['settings_value'];?>">
                                </div>

                                 <?php endforeach; ?> 


                                     
                        
 

                                  <!--  -->
                                 <button type="submit" name="btn_settings_edit" class="mt-2">Save settings</button>
                                </form>
                          </div>


                        </div>
                    </div>

                    <!-- /////////////  profile content end  ///////////// -->


<?php require_once '../include/footer.php'; ?>

<script>

    $(document).ready(function(){
        $('.icon_slc_btn').click(function(){
             $('.counter_icon').val($(this).attr('id'));
        })
    })
</script>