<?php  
$tab_page_title = "Neptune - About List";
?> 
<?php require_once '../include/header.php'; ?>


                   <!-- /////////////  profile content start  ///////////// -->
<!-- php code start -->
                   <?php 
                   $about_list_select_query = "SELECT * FROM about_info";
                   $about_list_select_mqsqli_query = mysqli_query($conn, $about_list_select_query);
                   $i = 1;
                   ?>

         
<!-- php code end -->


      <table class="table">
      <thead class="table-dark">
          <tr>
             <th>Sl No.</th>
             <th>About Title</th>
             <th>Year</th>
             <th>Skill(%)</th>
             <th>Status</th>
             <th>Action</th>
          </tr>
      </thead>
      <tbody>
       <?php foreach($about_list_select_mqsqli_query as $about_list):?>

            <tr>
            <td><?=$i++?></td>
            <td><?=$about_list['about_title']?></td>
            <td><?=$about_list['about_year']?></td>
            <td style="overflow-y: scroll;height:40px"><?=$about_list['about_skill']?></td>
            <td>
                
               <?php if($about_list['about_status']=="active"):?>
               <span class="badge bg-primary">
               <?=$about_list['about_status']?>
               </span>
               <?php elseif($about_list['about_status']=="diactive"):?>
               <span class="badge bg-danger">
               <?=$about_list['about_status']?>
               </span>
               <?php endif;?>
    
           </td>
            <td> 

            <a name="delete" class="btn btn-danger alt_click" href="../php_function/about_delete.php?id=<?=$about_list['about_id']?>">Delete</a>
            <a name="edit" class="btn btn-primary" href="../beckend/about_edit_form.php?id=<?=$about_list['about_id']?>">Edit</a>

            </td>

         </tr>
   
       <?php endforeach;?>
      </tbody>
      </table>



                  
                    <!-- /////////////  profile content end  ///////////// -->


<?php require_once '../include/footer.php'; ?>


<script>
  $(document).ready(function(){
   Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
  })
</script>