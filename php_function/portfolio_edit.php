<?php

// update or edit portfolio data 
session_start();
$conn = mysqli_connect('localhost','root','','cms');
$id = $_SESSION['portfolio_edit_id'];


$portfolio_update_cetagory = $_POST['portfolio_update_cetagory'];
$portfolio_title = $_POST['portfolio_title'];
$portfolio_details = $_POST['portfolio_details'];
$portfolio_status = $_POST['portfolio_status'];


$file_input = $_FILES['portfolio_img'];
$file_name = $_FILES['portfolio_img']['name'];
$file_type = $_FILES['portfolio_img']['type'];
$file_tmp_name = $_FILES['portfolio_img']['tmp_name'];
$file_size = $_FILES['portfolio_img']['size'];
$new_name = "portfolio_".$file_name;
$upload_location = "../beckend/uploads/portfolio/".$new_name;

if($file_name == true){
    move_uploaded_file($file_tmp_name,$upload_location);
    $portfolio_img_update_query = "UPDATE portfolios_info SET portfolio_img='$new_name' WHERE portfolio_id='$id'";
    mysqli_query($conn,$portfolio_img_update_query);

    $portfolio_update_query = "UPDATE portfolios_info SET portfolio_cetagory='$portfolio_update_cetagory',
    portfolio_title='$portfolio_title', portfolio_details='$portfolio_details', portfolio_status='$portfolio_status' WHERE portfolio_id= '$id'";
    $portfolio_update_mysqli_query = mysqli_query($conn,$portfolio_update_query);

}elseif($portfolio_update_cetagory == false){
    $_SESSION['portfolio_error'] = "Please, fill this box";
    header('location: ../beckend/portfolio_edit_form.php');

}elseif($portfolio_title == false){
    $_SESSION['portfolio_error'] = "Please, fill this box";
    header('location: ../beckend/portfolio_edit_form.php');

}elseif($portfolio_details == false){
    $_SESSION['portfolio_error'] = "Please, fill this box";
    header('location: ../beckend/portfolio_edit_form.php');
}else{
    $portfolio_update_query = "UPDATE portfolios_info SET portfolio_cetagory='$portfolio_update_cetagory',
    portfolio_title='$portfolio_title', portfolio_details='$portfolio_details', portfolio_status='$portfolio_status' WHERE portfolio_id= '$id'";
    $portfolio_update_mysqli_query = mysqli_query($conn,$portfolio_update_query);
}


header('location: ../beckend/portfolio_list.php');




?>