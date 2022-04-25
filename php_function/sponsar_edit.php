<?php
session_start();
$id = $_GET['id'];

$_SESSION['edit_id'] = $id;
header('location: ../beckend/sponsar_edit.php');




?>