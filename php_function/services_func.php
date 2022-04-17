<?php
session_start();
$conn = mysqli_connect('localhost','root','','cms');

$service_title = $_POST['service_title'];
$service_icon = $_POST['service_icon'];
$service_description = $_POST['service_description'];
$service_status = $_POST['service_status'];

$condition = false;


if($service_title == true && ctype_alpha(str_replace(' ','',$service_title))){
    $condition == true;
  
}else{
    header('location: ../beckend/service_add.php'); 
}

if($service_icon == true){
    $condition == true;
}else{
    header('location: ../beckend/service_add.php'); 
}

if($service_description == true && strlen($service_description)<400){
    $condition = true;



}else{
    $_SESSION['error_desc'] = "Please, use 400 less than letter";

    header('location: ../beckend/service_add.php'); 
}

if($service_status == true){
    $condition = true;

}else{
    header('location: ../beckend/service_add.php'); 
}

if($condition == true){
    $services_insert_query = "INSERT INTO services_info (service_title,service_icon,service_description,service_status) 
    VALUES('$service_title','$service_icon','$service_description','$service_status')" ;
    $services_mysqli_query = mysqli_query($conn,$services_insert_query);

    header('location: ../beckend/service_add.php');
}else{
    $_SESSION['error_include'] = "Sorry, somthing is wrong";
    header('location: ../beckend/service_add.php');

}


if(isset($_GET['delete'])){
    $id = $service_list['service_id'];
    echo $id;
    $delete_query = "DELETE FROM services_info WHERE service_id=$id";
    $delete_query_mysqli = mysqli_query($conn,$delete_query);
  }










?>

