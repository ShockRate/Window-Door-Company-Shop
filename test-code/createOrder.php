<?php
session_start();

include_once('classes.php');

$newOrder               = $Check->PagePostVars('newOrder');

if(isset($newOrder)){
    header("Location: index.php");
    $_SESSION['order'] = array(
            "ID"        => time(),
            "Series"    => $_POST['series'], 
            "Glazzing"  => $_POST['glazzing'], 
            "Color"     => $_POST['color']

    );
     echo $_SESSION['order']['ID'];
     echo $_SESSION['order']['Series'];
     echo $_SESSION['order']['Glazzing'];
     echo $_SESSION['order']['Color'];

    
    

} else{
    header("Location: index.php"); 

 
}
