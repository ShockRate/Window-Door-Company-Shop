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
// if (filter_input(INPUT_POST,'login')) {
//     require MYSQL;
//     $errors = array();
//     $safePOST = array_map('trim', filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING));
//     $id = $dbcl->real_escape_string($safePOST['id']);
//     $pass = $dbcl->real_escape_string($safePOST['password']);
//     $valid = TRUE;
//     $query = "SELECT AES_DECRYPT(pin, salt), active, user_level, user_id, "
//             ."CONCAT_WS(' ',first_name,last_name) FROM users WHERE ";
//     if (filter_var($id,FILTER_VALIDATE_EMAIL) && strlen($id <=80)) {
//         $query .="email = ? limit 1";
//     }else if(between($id, 5 , 50)){
//         $query .="username = ? limit 1";
//     }else{
//         $errors['id'] = 'Παρακαλώ δωστε ένα έγκυρo email / username';
//         $valid = FALSE;
//     }
//     if(!between($pass, 8, 20)){
//         $errors['password'] = 'Παρακαλώ δώστε ένα εγκυρο password';
//         $valid = FALSE;
//     }
//     if($valid){
//         $stmt = $dbcl->prepare($query);
//         $stmt->bind_param('s',$id);
//         $stmt->execute();
//         $stmt->store_result();
//         $stmt->bind_result($realPass, $active, $user_level, $user_id, $full_name);
//         $stmt->fetch();
//         if($stmt->num_rows == 1){
//             if($active == NULL){
//                 if($realPass == $pass){
//                     $_SESSION = array(
//                         'user_id' => $user_id,
//                         'user_level' => $user_level,
//                         'full_name' => $full_name 
//                     );
//                     header('Location:'.BASE_URL);
//                     exit();
//                 } else{
//                     $msg = '<p>Λάθος Username η password! Παρακαλώ δοκιμάστε ξανά.'
//                     .'αν δε θυμάστε το Username η το Password σας παρακλώ επικοινωνήσετε με τον Admin του συστήματος</p>';
//                 }
               
//             } else {
//                 $msg = '<p>O λογαριασμός σας δεν είναι ενεργός αυτή την στιγμή</p>';
//             }
//         } else {
//             $msg = '<p>Δεν υπάρχει τέτοιος χρήστης στο σύστημα</p>';
//         }
//     }
// }

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



