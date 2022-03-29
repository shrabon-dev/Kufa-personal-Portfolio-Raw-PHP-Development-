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
            //   print_r($arry['user_password'] );
            //   die();

         
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
                   
              
                if($arry['result'] == 1){

                    $_SESSION['login_statuse'] = "Hurrah!! Login successfull";
                    header("location: adminDashbord.php");
                }else{

                    $_SESSION['login_statuse_error'] = "Sorry, your email or password is wrong";
                    header("location: login.php");
                }

                
             }
      
          

            }
      ?>
<!-- login form function end -->
