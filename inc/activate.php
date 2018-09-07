<?php
$page_title = 'Activate';
$page_header_title = 'Activate Page';

include 'preferences.php';
include HEADER;

if (isset($_SESSION['user_id'])){
    header('Location:'.BASE_URL);
    exit();
}

$display_form = TRUE;
$x = filter_input(INPUT_GET,'x',FILTER_VALIDATE_EMAIL);
$y = filter_input(INPUT_GET,'y',FILTER_SANITIZE_STRING);

if($x && strlen($y) == 32){
    require MYSQL;
    $email = $dbcl->real_escape_string($x);
    $query = "SELECT active FROM users"
            ."WHERE email = ? limit 1";
    $stmt = $dbcl->prepare($query);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows == 1){
        $stmt->bind_param($active);
        $stmt->fetch();
        if($active == $y){
            $query = "UPDATE users SET active = NULL WHERE email = ?";
            $stmt = $dbcl->prepare($query);
            $stmt->bind_param('s',$email);
            $stmt->execute();
            if($stmt->affected_rows == 1){
                $msg = '<p>Ο λογαριασμός σας είναι πλέον ενεργός. Μπορείτε πλέον να <a href="index.php">Συνδεθείτε</a></p>';
                $display_form = FALSE;
            }else{
                $msg = '<p>Δε μπορέσαμε να ενεργοποιησουμε τον λογαρισμό σας.'
                .'Παρακαλώ ελέγξτε τον σύνδεσμο η επικοινωνήστε με τον administrator.</p>';
            }
        }else if($active == NULL){
            $msg = '<p>Ο λογαριασμός είναι ήδη ενεργός</p>';
        }else{
            $msg = '<p>Δε μπορέσαμε να ενεργοποιησουμε τον λογαρισμό σας.'
                .'Παρακαλώ ελέγξτε τον σύνδεσμο η επικοινωνήστε με τον administrator.</p>';
        }
    }else{
        $msg = '<p>Δε μπορέσαμε να ενεργοποιησουμε τον λογαρισμό σας.'
            .'Παρακαλώ ελέγξτε τον σύνδεσμο η επικοινωνήστε με τον administrator.</p>';
    }
    $stmt->close();
    unset($stmt);
    $dbcl->close();
    unset($dbcl);
   
} //END OF GET REQUEST
else if(filter_input(INPUT_POST ,'activate')){
    require MYSQL;

    function send_activation_link($id, $dbcl, $username){
        $result = is_exist($id, $dbcl, $username);
        if($result[0]){ // record exist
            if($result[1]){//acount nto active
                $id = $username?$result[2]:$id;
                if(send($id,$dbcl)){
                    $_SESSION['msg'] = '<p>Ένα μηνυμα επιβεβαίωσης εχει σταλεί στην διεύθυνση email σας'
                    .'παρακαλώ επιλέξτέ τον σύνδεσμο που σας στείλαμε για να ενεργοποποίσετε τον λογαριαμό σας </p>';
                }
            }

        }
    }
    $id = $dbcl->real_escape_string(trim(filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING)));
    if(fliter_var($id,FILTER_VALIDATE_EMAIL) && strlen($id) <=80){
        $msg = send_activation_link($id, $dbcl,FALSE);
    }else if(between($id,5,50)){
        $msg = send_activation_link($id, $dbcl,TRUE);
    }else{
        $msg = '<p>Παρακαλώ χρησιμοπιήστε μια έγκυρη διεύθυνση email η/και username</p>';
        $dbcl->close();
        unset($dbcl);
    }

}
if (isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    session_destroy();
    setcookie(session_name(),'',time()-3600);
}
echo isset($general_msg)?$general_msg:'';

if($display_form){
    include_once 'views/TESTactivateForm.php';
}