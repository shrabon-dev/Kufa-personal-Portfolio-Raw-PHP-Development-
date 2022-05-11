<?php
session_start();
$conn = mysqli_connect('localhost','root','','cms');

$testimonial_name = $_POST['testimonial_name'];
$testimonial_position = $_POST['testimonial_position'];
$testimonial_details = $_POST['testimonial_details'];
$testimonial_status = $_POST['testimonial_status'];


$file_input = $_FILES['testimonial_img'];
$file_name = $_FILES['testimonial_img']['name'];
$file_type = $_FILES['testimonial_img']['type'];
$file_tmp_name = $_FILES['testimonial_img']['tmp_name'];
$file_size = $_FILES['testimonial_img']['size'];
$new_name = "testimonial_".$file_name;
$upload_location = "../beckend/uploads/testimonial/".$new_name;


$condition = false;


if($testimonial_name == true && ctype_alpha(str_replace(' ','',$testimonial_name))){

  
}else{
    $_SESSION['error_title'] = "Please, use testimonial Name";
    $condition = true;

}

if($testimonial_position == true){
}else{
    $_SESSION['error_cetagory'] = "Please, use testimonial Position";

    $condition = true;; 
}

if($testimonial_details == true ){

}else{
    $_SESSION['error_desc'] = "Please, give the details";
    $condition = true;
}

if($testimonial_status == true){

}else{
    $_SESSION['error_desc'] = "Please, use portfolio status";
    $condition = true;
}
if($file_input == true){

}else{
    $_SESSION['error_img'] = "Please, choose a testimonial photo";
    $condition = true;
}
if($condition == true){
    $_SESSION['data_include'] = "Sorry, somthing is wrong";
    header('location: ../beckend/portfolio_add.php');
  
}elseif($condition == false){
    move_uploaded_file($file_tmp_name,$upload_location);

    $testimonial_insert_query = "INSERT INTO testimonial_info (testimonial_name,testimonial_position,testimonial_img,testimonial_details,testimonial_status) 
    VALUES('$testimonial_name','$testimonial_position','$new_name','$testimonial_details','$testimonial_status')" ;
    $portfolios_mysqli_query = mysqli_query($conn,$testimonial_insert_query);
    $_SESSION['data_include'] = "Your data is insert";

    header('location: ../beckend/testimonial_add.php');

}



?>

