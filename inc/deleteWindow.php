<?php  
session_start();

$windowIndex  = $_POST['windowIndex'] -1;
array_splice($_SESSION['Cart'],$windowIndex,1);
header("Location: index.php"); 
?>