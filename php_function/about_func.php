<?php
session_start();
$conn = mysqli_connect('localhost','root','','cms');

$about_title = $_POST['about_title'];
$about_year = $_POST['about_year'];
$about_skill = $_POST['about_skill'];
$about_status = $_POST['about_status'];

$condition = false;


if($about_title == true && ctype_alpha(str_replace(' ','',$about_title))){
    $condition == true;
  
}else{
    header('location: ../beckend/about_me_add.php'); 
}

if($about_year == true){
    $condition == true;
}else{
    header('location: ../beckend/about_me_add.php'); 
}

if($about_skill== true){
    $condition = true;



}else{
    $_SESSION['error_desc'] = "Please, fill tis blank";

    header('location: ../beckend/about_me_add.php'); 
}

if($about_status == true){
    $condition = true;

}else{
    header('location: ../beckend/about_me_add.php'); 
}

if($condition == true){
    $abouts_insert_query = "INSERT INTO about_info (about_title,about_year,about_skill,about_status) 
    VALUES('$about_title','$about_year','$about_skill','$about_status')" ;
    $abouts_mysqli_query = mysqli_query($conn,$abouts_insert_query);

    header('location: ../beckend/about_me_add.php');
}else{
    $_SESSION['error_include'] = "Sorry, somthing is wrong";
    header('location: ../beckend/about_me_add.php');

}


?>

