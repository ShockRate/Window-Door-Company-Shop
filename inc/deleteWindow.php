<?php  
session_start();

$windowIndex  = $_POST['windowIndex'] -1;
unset($_SESSION['Cart'][$windowIndex]);

header("Location: index.php"); 
?>