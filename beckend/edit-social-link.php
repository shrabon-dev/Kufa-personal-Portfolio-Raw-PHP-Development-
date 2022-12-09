<?php  
$tab_page_title = "Neptune - Admin About me";
?> 
<?php require_once '../include/header.php'; require_once "font_awesome.php";?>




<!-- /////////////  Social  content php start  ///////////// -->
  <?php 
        $id = $_GET['id'];
        $_SESSION['id'] = $id; 
        $data_insert = "SELECT * FROM socials WHERE id = '$id'";
        $data =  mysqli_fetch_assoc(mysqli_query($conn,$data_insert));
        
  ?>
<!-- /////////////  Social  content php end  ///////////// -->


<!-- /////////////  Social  content start  ///////////// -->

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Edit Social Link</h1>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-12">
                          
            
                          <div class="form_section">
                            <?php if(isset($_SESSION['error_validate'])): ?>
                               <div style="width: 500px;" class="alert alert-danger" role="alert">
                                  <strong> <?= isset($_SESSION['error_validate'])? $_SESSION['error_validate']:'' ?></strong>
                               </div>
                            <?php endif ?>
                            <?php if(isset($_SESSION['success_social_link_add'])): ?>
                               <div style="width: 500px;" class="alert alert-success" role="alert">
                                  <strong> <?= isset($_SESSION['success_social_link_add'])? $_SESSION['success_social_link_add']:'' ?></strong>
                               </div>
                            <?php endif ?>

                             <form class="profile_form_set_info counters_add_form" action="../php_function/update_social_link_post.php" method="post">
                                
                                <div>
                                <label for="">Name : </label>
                                <input type="text" name="name" value="<?=$data['name']?>">
                                </div>
                                <div>
                                <label for="">link : </label>
                                <input style="width: 80%;height:40px;border:1px solid #2269F5 !important;border-radius:5px;padding-left:16px" type="url" name="link" value="<?=$data['link']?>">
                                </div>
                                <div>
                                        <label for="">Status </label>
                                        <select name="status" id="">
                                            <option <?=($data['status']=='active')? 'selected':''?> value="active">Active</option>
                                            <option <?=($data['status']=='deactive')? 'selected':''?> value="deactive">Deactive</option>
                                        </select>
                                       
                                 </div>
                                <div>
                                <label for="">icon : </label>
                                <input class="social_icon" type="text" name="icon" value="<?=$data['icon']?>">
                                </div>
                                <div>
                                   <!-- php code start -->
                                   <div class="card m-1 mt-5" style="background-color:#dbdbdb; border-color:darkblue;">
                                        <div class="card-body">
                                          <h4 class="card-title">Choose Your Icon</h4>
                                           <div class="over_flow_hiden" style="overflow-y:scroll;height:180px;">
                                              <?php foreach($fonts as $icons): ?>
                                                  <span class="badge badge-dark m-1 icon_slc_btn" id="<?=$icons?>">
                                                  <i style='font-size:16px' class="fa-1x <?=$icons?>"></i>
                                              </span>
                                            <?php endforeach;?>
                                         </div>
                                        </div>
                                      </div>
                                     <!-- php code end -->
                                </div>
                                  <!--  -->
                                 <button type="submit" name="btn_settings_edit" class="mt-5">Add Link</button>

                                </form>
                          </div>


                        </div>
                    </div>


                    <!-- /////////////  profile content end  ///////////// -->
<?php unset( $_SESSION['error_validate']);?>
<?php unset( $_SESSION['success_social_link_add']);?>

<?php require_once '../include/footer.php'; ?>

<script>

    $(document).ready(function(){
        $('.icon_slc_btn').click(function(){
             $('.social_icon').val($(this).attr('id'));
        })
    })
</script>