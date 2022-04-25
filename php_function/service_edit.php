<?php
session_start();
$id = $_GET['id'];

$_SESSION['edit_id'] = $id;
header('location: ../beckend/service_edit_form.php');




?>