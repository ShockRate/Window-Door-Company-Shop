<?php  
session_start();
unset($_SESSION['Cart']);
unset($_SESSION['order']);
//header("Refresh: 0");
header("Location:" .$_SERVER['PHP_SELF']); 
?>