<?php
session_start();
$id = $_SESSION['edit_id'];
$title_of_update_service = $_POST['service_title'];
$icon_of_update_service = $_POST['service_icon'];
$description_of_update_service = $_POST['service_description'];
$status_of_update_service = $_POST['service_status'];

$conn = mysqli_connect('localhost','root','','cms');


$service_list_update_query = "UPDATE services_info SET service_title = '$title_of_update_service', service_icon = '$icon_of_update_service',
service_description = '$description_of_update_service', service_status = '$status_of_update_service' WHERE service_id='$id'";

$service_list_update_mysqli_query = mysqli_query($conn,$service_list_update_query);

header('location: ../beckend/service_list.php');




?>