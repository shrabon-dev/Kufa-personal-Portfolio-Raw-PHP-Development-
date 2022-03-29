<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
            
<!-- --------- login error message start-------- -->
   
                 <?php if(isset($_SESSION['login_statuse_error'])):?>
                    <div class="row">
                        <div class="col-lg-4 clearfix m-auto mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                         <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                         </symbol>
                         </svg>
                         <div class="alert alert-danger d-flex align-items-center" role="alert">
                           <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                             <div>
                               <?=$_SESSION['login_statuse_error'];?>
                             </div>
                         </div>
                        </div>
                    </div>

                 <?php endif; ?>
<!-- --------- login error message end-------- -->


    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="login.php">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="registration.php">Registration</a></p>
       
       <!-- registration success message start -->
            <?php  if(isset($_SESSION['registration_statuse'])): ?> 
              <div class="login_success_alert">
                  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                      </symbol>
                  </svg>
                     <div class="alert alert-success d-flex align-items-center z_index" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                         <div>
                         <?=$_SESSION['registration_statuse'];?>
                       </div>
                     </div>
                     </div>
              <?php endif; ?>
       <!-- registration success message end -->

              
              <script>
                var alertList = document.querySelectorAll('.alert');
                alertList.forEach(function (alert) {
                  new bootstrap.Alert(alert)
                })
              </script>
              <form action="login_function.php" method="post">
            <div class="auth-credentials m-b-xxl">
                <label  class="form-label">Email address</label>
                <input name="lg_email" type="email" class="form-control " placeholder="example@neptune.com" value="<?=(isset($_SESSION['login_email_show']))? $_SESSION['login_email_show']:''?>">
              
                <?php if(isset($_SESSION['lg_email_error'])):?>
                <div  class="alert alert-danger" role="alert">
                <?= $_SESSION['lg_email_error']; ?>
                 </div>
                 <?php endif; ?>

                <label class="form-label">Password</label>
                <input name="lg_pass" type="password" class="form-control"  placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                 <?php if(isset($_SESSION['lg_pass_error'])):?>
                <div  class="alert alert-danger" role="alert">
                <?= $_SESSION['lg_pass_error']; ?>
                 </div>
                 <?php endif; ?>
           
                
            </div>

            <div class="auth-submit">
                <button name="submit" type="submit" class="btn btn-primary">Sign In</button>
            </div>
            </form>
            <div class="divider"></div>            
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>

<?php session_unset(); ?>