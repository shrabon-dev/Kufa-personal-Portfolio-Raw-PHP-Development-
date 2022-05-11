<?php

$conn = mysqli_connect('localhost','root','','cms');

$id =$_GET['id'];

$testimonial_delete_query = "DELETE FROM testimonial_info WHERE testimonial_id=$id";
$delete_mysqli_query= mysqli_query($conn,$testimonial_delete_query);

header('location: ../beckend/testimonial_list.php');



?>