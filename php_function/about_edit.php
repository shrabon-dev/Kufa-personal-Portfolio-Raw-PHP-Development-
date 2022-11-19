<?php
session_start();
$conn = mysqli_connect('localhost','root','','cms');




$about_edit_title = $_POST['about_edit_title'];
$about_edit_year = $_POST['about_edit_year'];
$about_edit_skill = $_POST['about_edit_skill'];
$about_edit_status = $_POST['about_edit_status'];
$about_edit_id = $_POST['get_id'];

$condition = false;


if($about_edit_title == true && ctype_alpha(str_replace(' ','',$about_edit_title))){
    $condition == true;
  
}else{
    header('location: ../beckend/about_edit_form.php'); 
}

if($about_edit_year == true){
    $condition == true;
}else{
    header('location: ../beckend/about_edit_form.php'); 
}

if($about_edit_skill== true){
    $condition = true;



}else{
    $_SESSION['error_desc'] = "Please, fill tis blank";

    header('location: ../beckend/about_edit_form.php'); 
}

if($about_edit_status == true){
    $condition = true;

}else{
    header('location: ../beckend/about_edit_form.php'); 
}

if($condition == true){
    $about_list_update_query = "UPDATE about_info SET about_title = '$about_edit_title', about_year = '$about_edit_year',
    about_skill = '$about_edit_skill', about_status = '$about_edit_status' WHERE about_id='$about_edit_id'";
    
    $about_list_update_mysqli_query = mysqli_query($conn,$about_list_update_query);

    header('location: ../beckend/about_me_list.php');
}else{
    $_SESSION['error_include'] = "Sorry, somthing is wrong";
    header('location: ../beckend/about_edit_form.php');

}


?>

