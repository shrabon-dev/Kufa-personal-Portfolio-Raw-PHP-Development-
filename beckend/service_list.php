<?php  
$tab_page_title = "Neptune - Admin profile";
?> 
<?php require_once '../include/header.php'; ?>


                   <!-- /////////////  profile content start  ///////////// -->
<!-- php code start -->
                   <?php 
                   $service_list_select_query = "SELECT * FROM services_info";
                   $service_list_select_mqsqli_query = mysqli_query($conn, $service_list_select_query);
                   $i = 1;
                   ?>

         
<!-- php code end -->


      <table class="table">
      <thead class="table-dark">
          <tr>
             <th>Sl No.</th>
             <th>Service Title</th>
             <th>Service Icon</th>
             <th>Service Description</th>
             <th>Service Status</th>
             <th>Action</th>
          </tr>
      </thead>
      <tbody>
       <?php foreach($service_list_select_mqsqli_query as $service_list):?>

            <tr>
            <td><?=$i++?></td>
            <td><?=$service_list['service_title']?></td>
            <td><?=$service_list['service_icon']?></td>
            <td><?=$service_list['service_description']?></td>
            <td>
                
               <?php if($service_list['service_status']=="active"):?>
               <span class="badge bg-primary">
                 <?=$service_list['service_status'];?>
               </span>
               <?php elseif($service_list['service_status']=="diactive"):?>
               <span class="badge bg-danger">
                 <?=$service_list['service_status'];?>
               </span>
               <?php endif;?>
    
           </td>
            <td> 

            <a name="delete" class="btn btn-danger" href="../php_function/service_delete.php?id=<?=$service_list['service_id']?>">Delete</a>
            <button name="edit" class="btn btn-primary" href="../beckend/service_list.php?id=<?=$service_list['service_id']?>">Edit</button>
            <button name="change" class="btn btn-info" href="../beckend/service_list.php?id=<?=$service_list['service_id']?>">Cange Status</button>

            </td>

         </tr>
   
       <?php endforeach;?>
      </tbody>
      </table>



                  
                    <!-- /////////////  profile content end  ///////////// -->


<?php require_once '../include/footer.php'; ?>