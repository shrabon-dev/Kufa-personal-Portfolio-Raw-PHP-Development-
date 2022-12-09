<?php  
$tab_page_title = "Neptune - Admin About me";
?> 
<?php require_once '../include/header.php'; require_once "font_awesome.php";?>




<!-- /////////////  Social  content start  ///////////// -->

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Add Social Link</h1>
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

                             <form class="profile_form_set_info counters_add_form" action="../php_function/social_link_post.php" method="post">
                                
                                <div>
                                <label for="">Name : </label>
                                <input type="text" name="name">
                                </div>
                                <div>
                                <label for="">link : </label>
                                <input style="width: 80%;height:40px;border:1px solid #2269F5 !important;border-radius:5px;" class="" type="url" name="link">
                                </div>
                                <div>
                                <label for="">icon : </label>
                                <input class="social_icon" type="text" name="icon">
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


<!-- /////////////  Social  PHP SCRIPT START  ///////////// -->
   <?php
        $get_data_form_social_table = "SELECT * FROM socials";
        $socials_data = mysqli_query($conn,$get_data_form_social_table);
        $id = 1;
        // $socials_data = mysqli_fetch_assoc($query);

     

   ?>
<!-- /////////////  Social  PHP SCRIPT END  ///////////// -->
<!-- /////////////  Social Table content start  ///////////// -->
                    <div class="container form_section mt-5">

                       <div class="table-responsive">
                        <table class="table table-dark">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Social Name</th>
                              <th scope="col">Social Link</th>
                              <th scope="col">Social Icon</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                           
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($socials_data as $value): ?>
                            <tr class="">
                              <td ><?= $id++ ?></td>
                              <td><?= $value['name'] ?></td>
                              <td><?= $value['link'] ?></td>
                              <td><i class="<?= $value['icon'] ?>"></i></td>
                              <td>
                                <?php if($value['status'] == 'active'): ?>
                                   <span class="badge bg-primary"><?=$value['status']?></span>
                                <?php endif ?>
                                <?php if($value['status'] == 'deactive'): ?>
                                   <span class="badge bg-danger"><?=$value['status']?></span>
                                <?php endif ?>
                              </td>
                              <td>
                                <a href="../php_function/social_link_delete.php?id=<?=$value['id']?>" style="font-size: 16px;background:#8e4343" class="badge text-danger"><i class="fa fa-trash-o "></i></a>
                                <a href="./edit-social-link.php?id=<?=$value['id']?>" style="font-size: 16px;" class="badge bg-success text-light"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              </td>
                       
                            </tr>

                            <?php endforeach ?>
                          
                          </tbody>
                        </table>
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