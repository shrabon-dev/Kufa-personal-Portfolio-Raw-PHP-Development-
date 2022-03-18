<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$submit = $_POST['submit'];


if(!$name){
   $_SESSION['name__erorr'] = "Please, give your name.";
   header("location: registration.php");
}
if(!$email){
   $_SESSION['email__erorr'] = "Please, give your email.";
   header("location: registration.php");
}
if(!$password){
   $_SESSION['password__erorr'] = "Please, give your password minimum 8 charactar*.";
   header("location: registration.php");
}
if(!$confirm_password || $password !== $confirm_password){
   $_SESSION['confirm_password__erorr'] = "Please, match this password";
   header("location: registration.php");
}

?>