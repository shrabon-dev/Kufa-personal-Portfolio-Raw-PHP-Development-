<?php
session_start();
$conn = mysqli_connect('localhost','root','','cms');

$portfolio_title = $_POST['portfolio_title'];
$portfolio_cetagory = $_POST['portfolio_cetagory'];
$portfolio_url = $_POST['portfolio_url'];
$portfolio_status = $_POST['portfolio_status'];



$id = $_SESSION['edit_id'];
$file_input = $_FILES['portfolio_img'];
$file_name = $_FILES['portfolio_img']['name'];
$file_type = $_FILES['portfolio_img']['type'];
$file_tmp_name = $_FILES['portfolio_img']['tmp_name'];
$file_size = $_FILES['portfolio_img']['size'];
$new_name = "portfolio".$file_name;
$upload_location = "../beckend/uploads/portfolio/".$new_name;


$condition = false;


if($portfolio_title == true && ctype_alpha(str_replace(' ','',$portfolio_title))){

  
}else{
    $_SESSION['error_title'] = "Please, use portfolio title";
    $condition = true;

}

if($portfolio_cetagory == true){
}else{
    $_SESSION['error_cetagory'] = "Please, use portfolio cetagory";

    $condition = true;; 
}

if($portfolio_url == true && filter_var($portfolio_url,FILTER_VALIDATE_URL) == true){

}else{
    $_SESSION['error_desc'] = "Please, use valid url";

    $condition = true;
}

if($portfolio_status == true){

}else{
    $_SESSION['error_desc'] = "Please, use portfolio status";
    $condition = true;
}
if($file_input == true){

}else{
    $_SESSION['error_img'] = "Please, choose a portfolio photo";
    $condition = true;
}
if($condition == true){
    $_SESSION['data_include'] = "Sorry, somthing is wrong";
    header('location: ../beckend/portfolio_add.php');
  
}elseif($condition == false){
    move_uploaded_file($file_tmp_name,$upload_location);

    $portfolios_insert_query = "INSERT INTO portfolios_info (portfolio_title,portfolio_cetagory,portfolio_link,portfolio_img,portfolio_status) 
    VALUES('$portfolio_title','$portfolio_cetagory','$portfolio_url','$new_name','$portfolio_status')" ;
    $portfolios_mysqli_query = mysqli_query($conn,$portfolios_insert_query);
    $_SESSION['data_include'] = "Your data is insert";

    header('location: ../beckend/portfolio_add.php');

}




?>

