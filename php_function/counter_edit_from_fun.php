<?php
session_start();
$id = $_SESSION['edit_id'];
$counter_title = $_POST['counter_title'];
$counter_icon = $_POST['counter_icon'];
$counter_amount = $_POST['counter_amount'];
$counter_status = $_POST['counter_status'];

$conn = mysqli_connect('localhost','root','','cms');


$counter_list_update_query = "UPDATE counter_info SET counter_title = '$counter_title', counter_icon = '$counter_icon',
counter_amount = '$counter_amount', counter_status = '$counter_status' WHERE counter_id='$id'";

$counter_list_update_mysqli_query = mysqli_query($conn,$counter_list_update_query);

header('location: ../beckend/counter_list.php');




?>