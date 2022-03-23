<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$submit = $_POST['submit'];
$isFalse = false;


if($name){
   if(ctype_alpha(str_replace(' ','',$name)) == false){
      $isFalse = true;
      $_SESSION['name__erorr'] = "Please, use only letter.";
      
    }
    $_SESSION['name__show'] = $name;

}elseif(!$name){
   $isFalse = true;
   $_SESSION['name__erorr'] = "Please, give your name.";
}

if($email){

   if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
      $isFalse = true;
      $_SESSION['email__erorr'] = "Email is invalid";
 

   }
   $_SESSION['email__show'] =$email;


}elseif(!$email){
   $isFalse = true;
   $_SESSION['email__erorr'] = "Please, give your email.";
}
if($password){
   
  $num = preg_match("/[0-9]/",$password);
  $char = preg_match("/[a-z]/i",$password);
  $spchar = preg_match("/[^\w]/",$password);
  $pass_valid = $num || $char || $spchar;

    if(strlen($password) < 8 ){
      $isFalse = true;
      $_SESSION['password__erorr'] = "Please, give your password minimum 8 charactar*.";
    }else{
      if(!$pass_valid){
         $isFalse = true;
         $_SESSION['password__erorr'] = "Please, give the password a-z,.";
      }else{
         echo $pass_valid . "<br>". $password;
      }
    }

   
   

   $_SESSION['pass__show'] =$password;
}elseif(!$password){
   $isFalse = true;
   $_SESSION['password__erorr'] = "Please, give your password";
}

if(!$confirm_password || $password !== $confirm_password){
   $isFalse = true;
   $_SESSION['confirm_password__erorr'] = "Please, match this password";
}elseif($confirm_password && $password == $confirm_password){

   $_SESSION['conf__pass__show'] =$confirm_password;
   
}

if($isFalse){
   header("location: registration.php");
}


?>
