<?php

$conn = mysqli_connect('localhost','root','','cms');

$id =$_GET['id'];

$service_delete_query = "DELETE FROM services_info WHERE service_id=$id";
$delete_mysqli_query= mysqli_query($conn,$service_delete_query);

header('location: ../beckend/service_list.php');



?>