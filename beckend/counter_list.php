<?php  
$tab_page_title = "Neptune - Admin profile";
?> 
<?php require_once '../include/header.php'; ?>


                   <!-- /////////////  profile content start  ///////////// -->
<!-- php code start -->
                   <?php 
                   $counter_list_select_query = "SELECT * FROM counter_info";
                   $counter_list_select_mqsqli_query = mysqli_query($conn, $counter_list_select_query);
                   $i = 1;
                   ?>

         
<!-- php code end -->


      <table class="table">
      <thead class="table-dark">
          <tr>
             <th>Sl No.</th>
             <th>counter Title</th>
             <th>counter Icon</th>
             <th>counter Amount</th>
             <th>counter Status</th>
             <th>Action</th>
          </tr>
      </thead>
      <tbody>

       <?php foreach($counter_list_select_mqsqli_query as $counter_list):?>

            <tr>
            <td><?=$i++?></td>
            <td><?=$counter_list['counter_title']?></td>
            <td><i class="<?=$counter_list['counter_icon']?>"></i></td>
            <td><?=$counter_list['counter_amount']?></td>
            <td>
                
               <?php if($counter_list['counter_status']=="active"):?>
               <span class="badge bg-primary">
                 <?=$counter_list['counter_status'];?>
               </span>
               <?php elseif($counter_list['counter_status']=="diactive"):?>
               <span class="badge bg-danger">
                 <?=$counter_list['counter_status'];?>
               </span>
               <?php endif;?>
    
           </td>
            <td> 
            <a id="../php_function/counter_delete.php?id=<?=$counter_list['counter_id']?>" name="delete" class="btn btn-danger dlte_btn" >Delete</a>    
            <a name="edit" class="btn btn-primary" href="../php_function/counter_edit.php?id=<?=$counter_list['counter_id']?>">Edit</a>
            </td>

         </tr>
   
       <?php endforeach;?>


      </tbody>
      </table>



                  
                    <!-- /////////////  counter content end  ///////////// -->


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