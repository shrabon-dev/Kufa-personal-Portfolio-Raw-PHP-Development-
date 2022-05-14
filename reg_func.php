<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$submit = $_POST['submit'];
$isFalse = false;

$conn = mysqli_connect('localhost','root','','cms'); 
$sl_db = "SELECT * FROM users_info";
$db_query = mysqli_query($conn,$sl_db);

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


   while($db_query_arry = mysqli_fetch_assoc($db_query)){
      $incude_email =$db_query_arry['user_email'];
   
      if($email !== $incude_email){
         if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
            $isFalse = true;
            $_SESSION['email__erorr'] = "Email is invalid";
   
         }else{
            $_SESSION['email__show'] = "$email";
         }
        
      }else{
       $isFalse = true;
       $_SESSION['email__erorr'] = "This eamil use already";
   
      }
   }


}elseif(!$email){
   $isFalse = true;
   $_SESSION['email__erorr'] = "Please, give your email.";
}

if($phone == true){

   if(!preg_match('/^[0-9]{11}$/',$phone)){
      $isFalse = true;
      $_SESSION['phone__erorr'] = "Please, give the correct number";
   }else{
      $_SESSION['number_show'] = "$phone";
   }


}

if($password){
   
    if(strlen($password) < 8 ){
      $isFalse = true;
      $_SESSION['password__erorr'] = "Please, give your password minimum 8 charactar*.";
    }else{
      if(!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z!@#$%]/',$password)){
         $isFalse = true;
         $_SESSION['password__erorr'] = "Please, give the password a-z,.";
      }else{
         $pass_valid . "<br>". $password;
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

}else{

// Mysql connection

   $conn = mysqli_connect('localhost','root','','cms');
   $encrypt_password = md5($password);
   $insert_data = "INSERT INTO users_info(user_name,user_email,user_password,phone_number) VALUES('$name','$email','$encrypt_password','$phone')";
   
   $query =  mysqli_query($conn,$insert_data);


   $_SESSION['registration_statuse'] = "Your registration is Successfull";
   $_SESSION['login_email_show'] = "$email";


    
   header("location: login.php");
}

?>



