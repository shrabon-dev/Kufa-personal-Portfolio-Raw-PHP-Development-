<?php 
session_start();
$admin_user_id = $_SESSION['admin_user_id'];
$set_name = $_POST['change_name'];
$set_email = $_POST['change_email'];
$set_phone = $_POST['add_phone'];
$old_name = $_SESSION['admin_user_name'];
$old_email =  $_SESSION['admin_user_email'];
$current_password = $_POST['current_password_cng'];
$new_password = $_POST['new_password_cng'];
$confirm_password = $_POST['confirm_password_cng'];
$isFalse = false;

 $img_name = $_FILES['profile_photo']['name'];
 $img_type = $_FILES['profile_photo']['type'];
 $location = $_FILES['profile_photo']['tmp_name'];
 $img_size = $_FILES['profile_photo']['size'];

 $allow_file = ['image/jpg','image/jpeg','image/png'];




// profile image found query start
$conn = mysqli_connect('localhost','root','','cms');






// $set_profile = $_POST['change_name'];

// $update_query = "UPDATE users_info SET user_name='$set_name' user_email='$set_email' WHERE user_id='$admin_user_id'";
// $update_query_mysqli = mysqli_query($conn,$update_query);

// name change start

if(isset($_POST['btn_name_change'])){

    if($set_name == true){

        $update_query = "UPDATE users_info SET user_name='$set_name' WHERE user_id='$admin_user_id'";
        $update_query_mysqli = mysqli_query($conn,$update_query);
        $_SESSION['admin_user_name'] = $set_name;
        $_SESSION['submit'] = 'submit';
        $_SESSION['update_massage'] = "update your name from <b> $old_name </b> to <b> $set_name </b>";

        header('location: ../beckend/profile.php');
 
    }else{
        header('location: ../beckend/profile.php');
    }

}


// email change start

if(isset($_POST['btn_email_change'])){
       
    if($set_email == true){
        $update_query = "UPDATE users_info SET user_email='$set_email' WHERE user_id='$admin_user_id'";
        $update_query_mysqli = mysqli_query($conn,$update_query);
        $_SESSION['admin_user_email'] = $set_email;
        $_SESSION['submit'] = 'submit';
        $_SESSION['update_massage'] = "update your email from <b> $old_email </b> to <b> $set_email </b>";

        header('location: ../beckend/profile.php');
    }else{
        header('location: ../beckend/profile.php');
    }

}

// profile pic change start

if(isset($_POST['btn_profile_photo'])){



    if($img_name == true){


    if(in_array( $img_type,$allow_file) == true &&  $img_size < 5*1024*1024){


        $name_explode =explode('.',$img_name);
        $new_name = $admin_user_id.'.'.end($name_explode);
        $new_location = "../beckend/uploads/profile_images/".$new_name;
    
        move_uploaded_file($location,$new_location);
    
        $update_query = "UPDATE users_info SET profile_images='$new_name' WHERE user_id='$admin_user_id'";
        $update_query_mysqli = mysqli_query($conn,$update_query);
        header('location: ../beckend/profile.php');

     }else{
        $_SESSION['error__profile__msge'] = "please, use only jpeg, jpg, png format";
        header('location: ../beckend/profile.php');
    }

    }else{
        header('location: ../beckend/profile.php');
    }
  

       
   

}

// phone change start

if(isset($_POST['btn_phone_add'])){
       
    if($set_phone == true){
        // $conn = mysqli_connect('localhost','root','','cms');
        $update_query = "UPDATE users_info SET phone_number='$set_phone' WHERE user_id='$admin_user_id'";
        $update_query_mysqli = mysqli_query($conn,$update_query);
        $_SESSION['admin_user_phone'] = $set_phone;
        $_SESSION['submit'] = 'submit';
        $_SESSION['update_massage'] = "update your phone number";

        header('location: ../beckend/profile.php');
    }else{
        header('location: ../beckend/profile.php');
    }

}

// password change start


if(isset($_POST['btn_password_change'])){

    if($current_password){

        $current_password = md5($current_password);
        // $conn = mysqli_connect('localhost','root','','cms');
        $select_query = "SELECT COUNT(*) AS 'found_pass' FROM users_info WHERE user_password='$current_password' AND user_id='$admin_user_id'";
        $select_query_mysqli = mysqli_query($conn,$select_query);
  
         if(mysqli_fetch_assoc($select_query_mysqli)['found_pass'] == 1){
// -----------------------------
            if($new_password){
   
                if(strlen($new_password) < 8 ){
                  $isFalse = true;
                  $_SESSION['password__erorr'] = "Please, give your password minimum 8 charactar*.";
                }else{
                  if(!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z!@#$%]/',$new_password)){
                     $isFalse = true;
                     $_SESSION['password__erorr'] = "Please, give the password a-z,.";
                  }else{
                    
                  }
                }

            }elseif(!$new_password){
               $isFalse = true;
               $_SESSION['password__erorr'] = "Please, give your new password";
            }
        // ------------------------
            
            if(!$confirm_password || $new_password !== $confirm_password){
               $isFalse = true;
               $_SESSION['confirm_password__erorr'] = "Please, match this password";
            }elseif($confirm_password && $new_password == $confirm_password){
            
               $_SESSION['conf__pass__show'] =$confirm_password;
               
            }
            if($isFalse == true){
                header('location: ../beckend/profile.php');
            }elseif($isFalse == false){
                    $new_password = md5($new_password);
                    // $conn = mysqli_connect('localhost','root','','cms');
                    $update_query = "UPDATE users_info SET user_password='$new_password' WHERE user_id='$admin_user_id'";
                    $update_query_mysqli = mysqli_query($conn,$update_query);
                    $_SESSION['submit'] = 'submit';
                    $_SESSION['update_massage'] = "update your password";
                    header('location: ../beckend/profile.php');
            }
            
// -------------------
  
         }else{
              $_SESSION['pass_error_update'] = "Please, give the correct password";
               header('location: ../beckend/profile.php');
         }

    }else{
        $_SESSION['pass_error_update'] = "Please, give your current password";
        header('location: ../beckend/profile.php');

    }



}












?>
