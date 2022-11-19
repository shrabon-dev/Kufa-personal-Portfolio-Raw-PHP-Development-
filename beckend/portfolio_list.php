<?php  
$tab_page_title = "Neptune - portfolio List";
?> 
<?php require_once '../include/header.php'; ?>


                   <!-- /////////////  profile content start  ///////////// -->
<!-- php code start -->
                   <?php 
                   $portfolio_list_select_query = "SELECT * FROM portfolios_info";
                   $portfolio_list_select_mqsqli_query = mysqli_query($conn, $portfolio_list_select_query);
                   $i = 1;
                   ?>

         
<!-- php code end -->


      <table class="table">
      <thead class="table-dark">
          <tr>
             <th>Sl No.</th>
             <th>Cetagoru</th>
             <th>Title</th>
             <th>Details</th>
             <th>Image</th>
             <th>Status</th>
             <th>Action</th>
          </tr>
      </thead>
      <tbody>
       <?php foreach($portfolio_list_select_mqsqli_query as $portfolio_list):?>

            <tr>
            <td><?=$i++?></td>
            <td><?=$portfolio_list['portfolio_cetagory']?></td>
            <td><?=$portfolio_list['portfolio_title']?></td>
            <td style="overflow-y: scroll;height:40px !important"><?=$portfolio_list['portfolio_details']?></td>
            <td><img style="width: 80px; height: 5em !important;  overflow: scroll;" src="../beckend/uploads/portfolio/<?=$portfolio_list['portfolio_img']?>" alt="<?=$portfolio_list['portfolio_img']?>"> </td>
            <td>
                
               <?php if($portfolio_list['portfolio_status']=="active"):?>
               <span class="badge bg-primary">
               <?=$portfolio_list['portfolio_status']?>
               </span>
               <?php elseif($portfolio_list['portfolio_status']=="diactive"):?>
               <span class="badge bg-danger">
               <?=$portfolio_list['portfolio_status']?>
               </span>
               <?php endif;?>
    
           </td>
            <td> 

            <a name="delete" class="btn btn-danger alt_click" href="#" id="../php_function/portfolio_delete.php?id=<?=$portfolio_list['portfolio_id']?>">Delete</a>
            <a name="edit" class="btn btn-primary" href="../beckend/portfolio_edit_form.php?id=<?=$portfolio_list['portfolio_id']?>">Edit</a>

            </td>

         </tr>
   
       <?php endforeach;?>
      </tbody>
      </table>



                  
                    <!-- /////////////  profile content end  ///////////// -->


<?php require_once '../include/footer.php'; ?>


<script>
  $(document).ready(function(){
    


    $('.alt_click').click(function(){


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