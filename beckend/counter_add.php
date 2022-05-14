<?php  
$tab_page_title = "Neptune - Admin profile";
?> 
<?php require_once '../include/header.php'; require_once "font_awesome.php";?>


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
                                 <input class="counter_icon" type="text" name="counter_icon">
                                 </div>

                                       <!--  -->
                                       <!-- php code start -->
                                       <div class="card m-1" style="background-color:#dbdbdb; border-color:darkblue;">
                                  
                                  <div class="card-body">
                                    <h4 class="card-title">Choose Your Icon</h4>
                                    <div class="over_flow_hiden" style="overflow-y:scroll;height:180px;">
                                    <?php foreach($fonts as $icons): ?>
                                       <span class="badge badge-dark m-1 icon_slc_btn" id="<?=$icons?>">
                                       <i class="fa-1x <?=$icons?>"></i>
                                       </span>
                                       <?php endforeach;?>
                                       </div>
                                  </div>
                                </div>
                             

                                       <!-- php code end -->


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

<script>

    $(document).ready(function(){
        $('.icon_slc_btn').click(function(){
             $('.counter_icon').val($(this).attr('id'));
        })
    })
</script>