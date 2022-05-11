
<?php
       $conn = mysqli_connect('localhost','root','','cms');

         $id = $_GET['id'];
        echo $about_list_delete_query = "DELETE FROM about_info WHERE about_id='$id'";
        $about_list_delete_mqsqli_query = mysqli_query($conn, $about_list_delete_query);
        header('location: ../beckend/about_me_list.php');
      

      
      
       ?>