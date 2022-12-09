<?php 
session_start();
$conn = mysqli_connect('localhost','root','','cms');

$name = $_POST['name'];
$link = $_POST['link'];
$icon = $_POST['icon'];

if($name && $link && $icon){

    $insert = "INSERT INTO socials (name,link,icon) VALUES('$name','$link','$icon')";
    $insert_query =  mysqli_query($conn,$insert);
     $_SESSION['success_social_link_add'] = "Hurrah!, you added successfully a social link";
     header('location: ../beckend/add-social-link.php');
    
}else{
    $_SESSION['error_validate'] = "Please, fill up all field";
    header('location: ../beckend/add-social-link.php');
}




?>
