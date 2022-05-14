<?php
$conn = mysqli_connect('localhost','root','','cms');

foreach($_POST as $settings_name => $settings_value){
    
    $filter_value = htmlentities($settings_value, ENT_QUOTES);

    $settings_update_query = "UPDATE settings_info SET settings_value='$filter_value' WHERE settings_name='$settings_name'";
    mysqli_query($conn,$settings_update_query);

}   
header('location: ../beckend/setting_form_update.php')

?>