<?php 
session_start();
$conn = mysqli_connect('localhost','root','','cms');

$id =$_GET['id'];

$delete = "DELETE FROM socials WHERE id='$id'";
mysqli_query($conn,$delete);

$_SESSION['error_validate'] = "You delete a social link";
header('location: ../beckend/add-social-link.php');






?>
