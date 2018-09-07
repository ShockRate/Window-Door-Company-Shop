<?php

$page_title             ="EPAL Shop";
$page_header_title      ="Register";

//include 'inc/preferences.php';
//include HEADER;

if (isset($_SESSION['user_id'])){
    header('Location:'.BASE_URL);
    exit();
}

/** ===========================================================================================
 *  VALIDATING REGISTRATION CREDENTIALS
 * ============================================================================================
 */

if (filter_input(INPUT_POST,'register')) {
    require MYSQL;
    $us = $pw = $e = $fn =$ln = FALSE;
    $errors  = array();
    $safeData = array_map('trim', filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING));

    if (filter_var($safeData['email'],FILTER_VALIDATE_EMAIL) && strlen($safeData['email'] <=80)) {
        # code...
        $e = $dbcl->real_escape_string($safeData['email']);
    } else {
        $errors['email'] = 'ΜΗ ΑΠΟΔΕΚΤH ΔΙΕΥΘΥΝΣΗ E-MAIL ';
    }

    if (between($safeData['first_name'],2,20)) {
        # code...
        $fn = $dbcl->real_escape_string($safeData['first_name']);
    } else {
        $errors['first_name'] = 'ΜΗ ΑΠΟΔΕΚΤΟ ΟΝΟΜΑ (ΠΡΕΠΕΙ ΝΑ ΕΙΝΑΙ ΜΕΤΑ 2 ΚΑΙ 20 ΧΑΡΑΚΤΗΡΕΣ)';
    }

    if (between($safeData['last_name'],2,40)) {
        # code...
        $ln = $dbcl->real_escape_string($safeData['last_name']);
    } else {
        $errors['last_name'] = 'ΜΗ ΑΠΟΔΕΚΤΟ ΕΠΩΝΥΜΟ (ΠΡΕΠΕΙ ΝΑ ΕΙΝΑΙ ΜΕΤΑ 2 ΚΑΙ 40 ΧΑΡΑΚΤΗΡΕΣ)';
    }

    if (between($safeData['username'],5,50)) {
        # code...
        $us = $dbcl->real_escape_string($safeData['username']);
    } else {
        $errors['username'] = 'ΜΗ ΑΠΟΔΕΚΤΟ ΟΝΟΜΑ ΧΡΗΣΤΗ (ΠΡΕΠΕΙ ΝΑ ΕΙΝΑΙ ΜΕΤΑ 5 ΚΑΙ 50 ΧΑΡΑΚΤΗΡΕΣ)';
    }

    if (between($safeData['password'],8,20)) {
        # code...
        if($safeData['password'] == $safeData['cnfrmpassword']){
            $pw = $dbcl->real_escape_string($safeData['password']);
        }else{
            $errors['cnfrmpassword'] = 'ΕΠΙΒΕΒΑΙΩΣΤΕ ΤΟ ΣΩΣΤΟ PASSWORD';
        }
    } else {
        $errors['password'] = 'ΜΗ ΑΠΟΔΕΚΤΟ PASSWORD (ΠΡΕΠΕΙ ΝΑ ΕΙΝΑΙ ΜΕΤΑ 8 ΚΑΙ 20 ΧΑΡΑΚΤΗΡΕΣ)';
    }

    // CHECKING IF CREDENTIALS ALREADY IN DATABASE
    if($us && $pw && $fn && $ln && $e){
        $taken = false;
        $query = "SELECT username, email FROM users WHERE username = ? || email = ?";
        $stmt = $dbcl->prepare($query);
        $stmt->bind_param('ss',$us, $e);
        $stmt->execute();
        $stmt->bind_result($cus,$ce);
        $stmt->fetch();
        if($us == $cus ){
           $taken = TRUE;
           $errors['username']='USERNAME ΗΔΗ ΚΑΑΤΧΩΡΗΜΕΝΟ. ΠΑΡΑΚΑΛΩ ΔΟΚΙΜΑΣΤΕ ΔΙΑΦΟΡΕΤΙΚΟ';
        }
        if ($e == $ce) {
            $taken = TRUE;
            $errors['email']='EMAIL ΗΔΗ ΚΑΑΤΧΩΡΗΜΕΝΟ. ΠΑΡΑΚΑΛΩ ΔΟΚΙΜΑΣΤΕ ΔΙΑΦΟΡΕΤΙΚΟ';
        }
    

        //INSERT INTO DATABASE AND SENDING CONFIRMATION MAIL
        if(!$taken){
            $query = "INSERT INTO users"
                    ."(username, first_name, last_name, email, salt, active, pin, registration_date)"
                    ."VALUES"
                    ."(?,?,?,?,?,?,AES_ENCRYPT(?,?),UTC_TIMESTAMP())";
            $salt = substr(md5(uniqid(rand())),-20); 
            $active = substr(sha1(uniqid(rand())),-32);
            $stmt = $dbcl->prepare($query);
            $stmt->bind_param('ssssssss',$us,$fn,$ln,$e,$salt,$active,$pw,$salt);
            $stmt->execute();
            if($stmt->affected_rows == 1){
                $body = "You have been registered to EPAL shop."
                        ."Please follow the link to our site in order to log in:\n\n";
                //$body .= BASE_URL.'inc/activate.php?x='.urldecode($e).'&y='.$active;
                $body .= BASE_URL;
                mail($e, 'Registration Confirmation',$body,'From:'.ADMIN_EMAIL );
                $_SESSION['msg'] = '<p>Ευχαριστουμε για την εγραφη.</p>'
                                    .'Ένα μήνυμα επιβεβαίωσης έχει σταλεί στο email σας.'
                                    .'Παρακαλώ ακολουθείστε τον σύνδεσμο που σας στείλαμε για να ενεργοποιήσετε τον λογαριασμό σας.';
                $stmt->close();
                unset($stmt);
                $dbcl->close();
                unset($dbcl);
                header('Location:'.BASE_URL.'index.php');
                exit();
            }else{
                $general_msg = '<p>System error occured,'
                                .'H εγραφή σας απέτυχε.'.$stmt->error;
            }


        } // ALREADY TAKEN
        $stmt->close();
        unset($stmt);
        $dbcl->close();
        unset($dbcl);
    }
}


$nav = $Check->PageGetVars('nav');
if (isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
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



