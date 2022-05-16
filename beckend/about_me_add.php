<?php  
$tab_page_title = "Neptune - Admin About me";
?> 
<?php require_once '../include/header.php'; require_once "font_awesome.php";?>


<!-- /////////////  profile content start  ///////////// -->

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>About me Add</h1>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-12">
                          <div class="form_section">
                             <form class="profile_form_set_info counters_add_form" action="../php_function/about_func.php" method="post">
                                 <label for="">About Title : </label>
                                 <input type="text" name="about_title">
                                  <!--  -->

                                     
                                  <!--  -->
                                 <div>
                                 <label for="">Year : </label>
                                 <input class="counter_icon" type="number" name="about_year">
                                 </div>

                                  <!--  -->
                                  <div>
                                 <label for="" class="skill">Skill : </label>
                                 <input class="counter_icon" type="range" name="about_skill" min="1" max="100">
                                 </div>
                                    <!--  -->
                                    

                                 <div>
                                 <label for="">About Status : </label>
                                 <select name="about_status" id="">
                                     <option value="active">Active</option>
                                     <option value="diactive">Diactive</option>
                                 </select>
                                 </div>
                                 <!--  -->
 

                                  <!--  -->
                                 <div><?=(isset( $_SESSION['error_include']))?  $_SESSION['error_include']:''?><?php unset( $_SESSION['error_include']);?></div>

                                 <button type="submit" name="btn_about_add" class="mt-2">About Add</button>
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