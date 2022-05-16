<?php

$conn = mysqli_connect('localhost','root','','cms');

$id =$_GET['id'];

$image_found_query = "SELECT sponsar_img FROM sponsars WHERE sponsar_id=$id";
$img_name = mysqli_fetch_assoc(mysqli_query($conn,$image_found_query))['portfolio_img'];
unlink('../beckend/uploads/portfolio/'.$img_name);


$sponsars_delete_query = "DELETE FROM sponsars WHERE sponsar_id=$id";
$delete_mysqli_query= mysqli_query($conn,$sponsars_delete_query);


header('location: ../beckend/sponsar_list.php');

?>