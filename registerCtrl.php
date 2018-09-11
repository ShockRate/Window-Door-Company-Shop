<?php
require 'inc/register.php';
require 'inc/login.php';
$page_title             ="EPAL Shop";
$page_header_title      ="Register";



if (isset($_SESSION['user_id'])){
    header('Location:'.BASE_URL);
    exit();
}

$register = new Register();
$login = new login();

if (filter_input(INPUT_POST,'register')) {
    $safeData = array_map('trim', filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING));
    $errors  = $register->registerPart($safeData);
    $general_msg = $errors['msg'];   
}
if (filter_input(INPUT_POST,'login')) {
    $safePOST = array_map('trim', filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING));
    $errors  = $login->loginUser($safePOST);
    $msg = $login->msg();

}


$nav = $Check->PageGetVars('nav'); 
 
if (isset($_SESSION['msg'])){
    echo '<div>'.$_SESSION['msg']. '<div>';
    unset($_SESSION['msg']);
    session_destroy();
    setcookie(session_name(),'',time()-3600);
}
    echo isset($general_msg)?$general_msg:'';

switch ($nav) {
    case 'register': 
        include_once 'views/TESTregisterForm.php';
        break;
       
    default:
        include_once 'views/TESTloginForm.php';
        break;
        
        
}
?>



