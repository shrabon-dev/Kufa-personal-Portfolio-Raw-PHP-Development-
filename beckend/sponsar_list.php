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
            <td><img style="width: 80px;height:40px;" src="../beckend/uploads/sponsar/<?=$sponsar_list['sponsar_img']?>"></td>
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

            <a id="../php_function/sponsar_delete.php?id=<?=$sponsar_list['sponsar_id']?>" name="delete" class="btn btn-danger dlte_btn" >Delete</a>         
            <a name="edit" class="btn btn-primary" href="../php_function/sponsar_edit.php?id=<?=$sponsar_list['sponsar_id']?>">Edit</a>

            </td>

         </tr>
   
       <?php endforeach;?>
      </tbody>
      </table>



                  
                    <!-- /////////////  profile content end  ///////////// -->


<?php require_once '../include/footer.php'; ?>

<script>
  $(document).ready(function(){
    $('.dlte_btn').click(function(){


      Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#d33',
  cancelButtonColor: '#3085d6',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
      
    window.location.href = $(this).attr('id');

  }
})
    })

  })
</script>