<?php 
session_start();
$conn = mysqli_connect('localhost','root','','cms');
$id =  $_SESSION['id'];
$name = $_POST['name'];
$link = $_POST['link'];
$icon = $_POST['icon'];
$status = $_POST['status'];

if($name && $link && $icon){

    $update = "UPDATE socials SET name ='$name', link='$link', icon='$icon', status='$status' WHERE id =$id";
    $insert_query =  mysqli_query($conn,$update);
     $_SESSION['success_social_link_add'] = "Hurrah!, you added successfully a social link";
     header('location: ../beckend/add-social-link.php');
    
}else{
    $_SESSION['error_validate'] = "Please, fill up all field";
    header('location: ../beckend/edit-social-link.php');
}




?>
