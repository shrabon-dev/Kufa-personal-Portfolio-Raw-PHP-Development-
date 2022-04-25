<?php
session_start();

$conn = mysqli_connect('localhost','root','','cms');
$sponsar_status = $_POST['sponsar_status'];
$file_name = $_FILES['sponsar_photo']['name'];
$file_type = $_FILES['sponsar_photo']['type'];
$file_tmp_name = $_FILES['sponsar_photo']['tmp_name'];
$file_size = $_FILES['sponsar_photo']['size'];
$new_name = "sponsar_".$file_name;
$upload_location = "../beckend/uploads/sponsar/".$new_name;

move_uploaded_file($file_tmp_name,$upload_location);

$sponsar_query = "INSERT INTO sponsars (sponsar_img,sponsar_status) VALUES('$new_name','$sponsar_status') ";
mysqli_query($conn,$sponsar_query);

header('location: ../beckend/sponsar_list.php')









?>

