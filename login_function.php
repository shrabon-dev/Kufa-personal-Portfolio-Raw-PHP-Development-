<?php session_start(); ?>

<!-- login form function start -->
<?php 
       if(isset($_POST['lg_email'])){
             $lg_email = $_POST['lg_email'];
             $lg_pass = $_POST['lg_pass'];
             $encpt_lg_pass=md5($lg_pass);
             $isTrue= false;
      
            
            $conn = mysqli_connect('localhost','root','','cms'); 

            $data_select = "SELECT COUNT(*) AS 'result' FROM users_info WHERE user_email='$lg_email' AND user_password='$encpt_lg_pass'";
            $query = mysqli_query($conn,$data_select);
            $arry = mysqli_fetch_assoc($query);
             
        
         
             if($lg_email){
                 $isTrue = true;

            }else{
                $_SESSION['lg_email_error']="Please fill the email";
                header("location: login.php");
            }

            if($lg_pass){
                
                $isTrue = true;
      
            }else{
                $_SESSION['lg_pass_error'] = "Please fill the password";
                header("location: login.php");
            }
        

             if($isTrue == true){
                   
                $admin_user_select = "SELECT user_id,user_name,phone_number FROM users_info WHERE user_email='$lg_email'";
                $admin_user_query = mysqli_query($conn,$admin_user_select);
                $admin_user_arry = mysqli_fetch_assoc($admin_user_query);
                $admin_user_name = $admin_user_arry['user_name'];
                $admin_user_id = $admin_user_arry['user_id'];
                $admin_user_phone = $admin_user_arry['phone_number'];
    
                // print_r($admin_user_phone);
                // die();
              
                if($arry['result'] == 1){
    
                    $_SESSION['admin_user_name'] = "$admin_user_name";
                    $_SESSION['admin_user_email'] = "$lg_email";
                    $_SESSION['admin_user_id'] = "$admin_user_id";
                    $_SESSION['admin_user_phone'] = "$admin_user_phone";

                    $_SESSION['login_statuse'] = "Hurrah!! Login successfull";
                    header("location: beckend/adminDashbord.php");
                }else{

                    $_SESSION['login_statuse_error'] = "Sorry, your email or password is wrong";
                    header("location: login.php");
                }

                
             }
      
          

            }
      ?>
<!-- login form function end -->
