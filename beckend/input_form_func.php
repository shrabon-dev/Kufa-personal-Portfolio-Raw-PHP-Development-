<!-- input form php code -->
<?php
      session_start();

       $conn = mysqli_connect('localhost','root','','cms');
        print_r($_POST);
        $messanger_name = $_POST['messanger_name'];
        $messanger_email = $_POST['messanger_email'];
        $message_subject = $_POST['message_subject'];
        $message = $_POST['message'];
        $isTrue = false;

        if($messanger_name == true){
              $isTrue =true;
        }else{
               $_SESSION['messanger_name_error'] = "Please, Fill up this";
               header('location: ../index.php');
        }

        if($messanger_email == true){
              $isTrue = true;
        }else{
               $_SESSION['messanger_email_error'] = "Please, Fill up this";
               header('location: ../index.php');
        }


        if($message_subject == true){
              $isTrue = true;
        }else{
               $_SESSION['message_subject_error'] = "Please, Fill up this";
               header('location: ../index.php');
        }


        if($message == true){
              $isTrue = true;
        }else{
               $_SESSION['message_error'] = "Please, write your message";
               header('location: ../index.php');
        }
     

        if($isTrue == true){
          $form_input_insert_query = "INSERT INTO messages (messanger_name,messanger_email,message_subject,message) 
          VALUES('$messanger_name','$messanger_email','$message_subject','$message')";
          mysqli_query($conn,$form_input_insert_query);
          $_SESSION['message_success'] = "Hurrah! Your message is sent";
          header('location: ../index.php');
        }


       



       


?>

