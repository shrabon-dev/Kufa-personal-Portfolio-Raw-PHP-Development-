<?php
session_start();
$conn = mysqli_connect('localhost','root','','cms');


$id = $_SESSION['edit_id'];
$file_name = $_FILES['sponsar_photo']['name'];
$file_type = $_FILES['sponsar_photo']['type'];
$file_tmp_name = $_FILES['sponsar_photo']['tmp_name'];
$file_size = $_FILES['sponsar_photo']['size'];
$new_name = "sponsar_".$file_name;
$upload_location = "../beckend/uploads/sponsar/".$new_name;

move_uploaded_file($file_tmp_name,$upload_location);


$status_of_update_sponsar = $_POST['sponsar_status'];

if($file_name){
    $sponsar_list_update_query = "UPDATE sponsars SET sponsar_img = '$new_name',sponsar_status = '$status_of_update_sponsar' WHERE sponsar_id='$id'";

}else{
    $sponsar_list_update_query = "UPDATE sponsars SET sponsar_status = '$status_of_update_sponsar' WHERE sponsar_id='$id'";

}


$sponsar_list_update_mysqli_query = mysqli_query($conn,$sponsar_list_update_query);

header('location: ../beckend/sponsar_list.php');




?>