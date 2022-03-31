<?php

     
$conn = mysqli_connect('localhost','root','','cms'); 
$total_user = "SELECT COUNT(*) as 'total_user_amout' FROM users_info; ";
$user_query = mysqli_query($conn,$total_user);
$total_user_arry = mysqli_fetch_assoc($user_query);

echo $total['total_user_amout'];


?>