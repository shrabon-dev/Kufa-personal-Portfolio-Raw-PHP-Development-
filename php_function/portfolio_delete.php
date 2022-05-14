<?php

$conn = mysqli_connect('localhost','root','','cms');

$id =$_GET['id'];

$image_found_query = "SELECT portfolio_img FROM portfolios_info WHERE portfolio_id=$id";
$img_name = mysqli_fetch_assoc(mysqli_query($conn,$image_found_query))['portfolio_img'];
unlink('../beckend/uploads/portfolio/'.$img_name);


$portfolio_delete_query = "DELETE FROM portfolios_info WHERE portfolio_id=$id";
$delete_mysqli_query= mysqli_query($conn,$portfolio_delete_query);


header('location: ../beckend/portfolio_list.php');

?>