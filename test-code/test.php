<?php
session_start();
include 'inc/preferences.php';

$_SESSION['order'] = array(
        "ID"        => time(),
        "Series"    => $_POST['series'], 
        "Glazzing"  => $_POST['glazzing'], 
        "Color"     => $_POST['color']

    );
     
header('Location: ../index.php'); 
exit();
