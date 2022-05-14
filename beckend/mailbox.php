<?php  
$tab_page_title = "Neptune - Admin Mailbox";
?> 
<?php require_once '../include/header.php'; require_once "font_awesome.php";?>


                    <!-- /////////////  mailbox content start  ///////////// -->

                    <!-- php code start  -->
                    <?php

                     $message__query = "SELECT * FROM messages";
                     $message_mysqli_query = mysqli_query($conn,$message__query);

                     $i = 1;
                     
                    ?>
                    <!-- php code end -->




                      <div class="container">
                        <div class="mail_box_container">
                            <div class="row">   
                            <div class="col-lg-12">
                                <div class="mail_details">
                                    <?php    foreach($message_mysqli_query as $message_value): ?>

                                       <div class="person_name"> <span style="width: 40px; height:40px; border-radius:50%;background:#004586;text-align:center;line-height:40px;color:aliceblue;"><?=$i++;?></span> <?=$message_value['messanger_name']?></div>
                                       <div class="person_email"><?=$message_value['messanger_email']?></div>
                                       <h6> <span>Subject:</span> <?=$message_value['message_subject']?></h6>

                                       <div class="person_email_show">
                                           <p><?=$message_value['message']?></p>
                                       </div>
                                    <?php endforeach;?>       
                                </div>
                            </div>
                            </div>
                        </div>
                      </div>

                    <!-- /////////////  mailbox content end  ///////////// -->


<?php require_once '../include/footer.php'; ?>

<script>

    $(document).ready(function(){
        $('.icon_slc_btn').click(function(){
             $('.counter_icon').val($(this).attr('id'));
        })
    })
</script>