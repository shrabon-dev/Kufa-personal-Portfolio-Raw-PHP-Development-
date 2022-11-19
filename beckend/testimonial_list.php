<?php  
$tab_page_title = "Neptune - Testimonial List";
?> 
<?php require_once '../include/header.php'; ?>


                   <!-- /////////////  profile content start  ///////////// -->
<!-- php code start -->
                   <?php 
                   $testimonial_list_select_query = "SELECT * FROM testimonial_info";
                   $testimonial_list_select_mqsqli_query = mysqli_query($conn, $testimonial_list_select_query);
                   $i = 1;
                   ?>

         
<!-- php code end -->


<table class="table">
      <thead class="table-dark">
          <tr>
             <th>Sl No.</th>
             <th>Name</th>
             <th>Position</th>
             <th>Details</th>
             <th>Image</th>
             <th>Status</th>
             <th>Action</th>
          </tr>
      </thead>
      <tbody>
       <?php foreach($testimonial_list_select_mqsqli_query as $testimonial_list):?>

            <tr>
            <td><?=$i++?></td>
            <td><?=$testimonial_list['testimonial_name']?></td>
            <td><?=$testimonial_list['testimonial_position']?></td>
            <td style="overflow-y: scroll;"><?=$testimonial_list['testimonial_details']?></td>
            <td ><img style="width: 80px;height:80px !important" src="../beckend/uploads/testimonial/<?=$testimonial_list['testimonial_img']?>" alt="<?=$testimonial_list['testimonial_img']?>"> </td>
            <td>
                
               <?php if($testimonial_list['testimonial_status']=="active"):?>
               <span class="badge bg-primary">
               <?=$testimonial_list['testimonial_status']?>
               </span>
               <?php elseif($testimonial_list['testimonial_status']=="diactive"):?>
               <span class="badge bg-danger">
               <?=$testimonial_list['testimonial_status']?>
               </span>
               <?php endif;?>
    
           </td>
            <td> 

            <a id="../php_function/testimonial_delete.php?id=<?=$testimonial_list['testimonial_id']?>" name="delete" class="btn btn-danger dlte_btn" >Delete</a>
            <a name="edit" class="btn btn-primary" href="../beckend/testimonial_edit_form.php?id=<?=$testimonial_list['testimonial_id']?>">Edit</a>

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