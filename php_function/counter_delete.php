
<?php
       $conn = mysqli_connect('localhost','root','','cms');

         $id = $_GET['id'];
        echo $counter_list_delete_query = "DELETE FROM counter_info WHERE counter_id=$id";
        $counter_list_delete_mqsqli_query = mysqli_query($conn, $counter_list_delete_query);
        header('location: ../beckend/counter_list.php');
      

      
      
       ?>