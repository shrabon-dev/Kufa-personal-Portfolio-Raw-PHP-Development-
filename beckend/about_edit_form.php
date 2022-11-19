<?php  
$tab_page_title = "Neptune - Admin About me";
?> 
<?php require_once '../include/header.php'; require_once "font_awesome.php";?>




<!-- /////////////  profile content start  ///////////// -->

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>About me Edit</h1>
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
                             <form class="profile_form_set_info counters_add_form" action="../php_function/about_edit.php" method="post">
                                 <label for="">About Title : </label>
                                 <input type="text" name="about_edit_title" value="<?=$about_mysqli_array_query_for_show['about_title'];?>">
                                  <!--  -->
                                  <input hidden type="text" name="get_id" value="<?=$id?>">

                                     
                                  <!--  -->
                                 <div>
                                 <label for="">Year : </label>
                                 <input class="counter_icon" type="number" name="about_edit_year" value="<?=$about_mysqli_array_query_for_show['about_year'];?>">
                                 </div>

                                  <!--  -->
                                  <div>
                                 <label for="">Skill(%) : </label>
                                 <input class="counter_icon" type="number" name="about_edit_skill" value="<?=$about_mysqli_array_query_for_show['about_skill'];?>">
                                 </div>
                                    <!--  -->
                                    

                                 <div>
                                 <label for="">About Status : </label>
                                 <select name="about_edit_status" id="">
                                     <option value="active" <?=($about_mysqli_array_query_for_show['about_status'] == 'actice')? 'selected':''?>>Active</option>
                                     <option value="diactive" <?=($about_mysqli_array_query_for_show['about_status'] == 'diactive')? 'selected':''?>>Diactive</option>
                                 </select>
                                 </div>
                                 <!--  -->
 

                                  <!--  -->
                                 <div><?=(isset( $_SESSION['error_include']))?  $_SESSION['error_include']:''?><?php unset( $_SESSION['error_include']);?></div>

                                 <button type="submit" name="btn_about_add" class="mt-2">Update</button>
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