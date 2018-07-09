<?php  
session_start();
unset($_SESSION['Cart']);
unset($_SESSION['order']);

//header("Location:" .$_SERVER['PHP_SELF']); 
header("Location: index.php"); 
?>