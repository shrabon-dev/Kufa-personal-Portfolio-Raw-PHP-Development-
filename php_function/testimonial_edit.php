<?php

// update or edit testimonial data 
session_start();
$conn = mysqli_connect('localhost','root','','cms');
$id = $_SESSION['testmonial_edit_id'];





$testimonial_update_name = $_POST['testimonial_update_name'];
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



if($file_name){
    move_uploaded_file($file_tmp_name,$upload_location);

    $testimonial_img_update_query = "UPDATE testimonial_info SET testimonial_img='$new_name' WHERE testimonial_id='$id'";
    mysqli_query($conn,$testimonial_img_update_query);

}else{
    $testimonial_update_query = "UPDATE testimonial_info SET testimonial_name='$testimonial_update_name', testimonial_position='$testimonial_position', 
    testimonial_details='$testimonial_details', testimonial_status='$testimonial_status' WHERE testimonial_id= '$id'";
    $testimonial_update_mysqli_query = mysqli_query($conn,$testimonial_update_query);
}





header('location: ../beckend/testimonial_list.php');




?>