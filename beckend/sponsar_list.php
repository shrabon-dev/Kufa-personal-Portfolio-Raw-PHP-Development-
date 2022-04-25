<?php  
$tab_page_title = "Neptune - Admin profile";
?> 
<?php require_once '../include/header.php'; ?>


                   <!-- /////////////  profile content start  ///////////// -->
<!-- php code start -->
                   <?php 
                   $sponsar_list_select_query = "SELECT * FROM sponsars";
                   $sponsar_list_select_mqsqli_query = mysqli_query($conn, $sponsar_list_select_query);
                   $i = 1;
                   ?>

         
<!-- php code end -->


      <table class="table">
      <thead class="table-dark">
          <tr>
             <th>Sl No.</th>
             <th>Sponsar Image</th>
             <th>Sponsar Status</th>
             <th>Action</th>
          </tr>
      </thead>
      <tbody>
       <?php foreach($sponsar_list_select_mqsqli_query as $sponsar_list):?>

            <tr>
            <td><?=$i++?></td>
            <td><?=$sponsar_list['sponsar_img']?></td>
            <td>
                
               <?php if($sponsar_list['sponsar_status']=="active"):?>
               <span class="badge bg-primary">
                 <?=$sponsar_list['sponsar_status'];?>
               </span>
               <?php elseif($sponsar_list['sponsar_status']=="diactive"):?>
               <span class="badge bg-danger">
                 <?=$sponsar_list['sponsar_status'];?>
               </span>
               <?php endif;?>
    
           </td>
            <td> 

            <a name="delete" class="btn btn-danger" href="../php_function/sponsar_delete.php?id=<?=$sponsar_list['sponsar_id']?>">Delete</a>
            <a name="edit" class="btn btn-primary" href="../php_function/sponsar_edit.php?id=<?=$sponsar_list['sponsar_id']?>">Edit</a>

            </td>

         </tr>
   
       <?php endforeach;?>
      </tbody>
      </table>



                  
                    <!-- /////////////  profile content end  ///////////// -->


<?php require_once '../include/footer.php'; ?>