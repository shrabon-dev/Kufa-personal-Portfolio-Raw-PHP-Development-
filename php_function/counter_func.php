<?php
session_start();
$conn = mysqli_connect('localhost','root','','cms');

$counter_title = $_POST['counter_title'];
$counter_icon = $_POST['counter_icon'];
$counter_amount = $_POST['counter_amount'];
$counter_status = $_POST['counter_status'];

$condition = false;


if($counter_title == true && ctype_alpha(str_replace(' ','',$counter_title))){
    $condition == true;
  
}else{
    header('location: ../beckend/counter_add.php'); 
}

if($counter_icon == true){
    $condition == true;
}else{
    header('location: ../beckend/counter_add.php'); 
}

if($counter_amount== true){
    $condition = true;



}else{
    $_SESSION['error_desc'] = "Please, fill tis blank";

    header('location: ../beckend/counter_add.php'); 
}

if($counter_status == true){
    $condition = true;

}else{
    header('location: ../beckend/counter_add.php'); 
}

if($condition == true){
    $counters_insert_query = "INSERT INTO counter_info (counter_title,counter_icon,counter_amount,counter_status) 
    VALUES('$counter_title','$counter_icon','$counter_amount','$counter_status')" ;
    $counters_mysqli_query = mysqli_query($conn,$counters_insert_query);

    header('location: ../beckend/counter_add.php');
}else{
    $_SESSION['error_include'] = "Sorry, somthing is wrong";
    header('location: ../beckend/counter_add.php');

}


?>

