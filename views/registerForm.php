<?php

$page_title             ="EPAL Shop";
$page_header_title      ="Register";

include './inc/preferences.php';
include HEADER;

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

    if (filter_var($safeData['email'],FILTER_VALIDATE_MAIL) && strlen($safeData['email'] <=80)) {
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
        $query = "SELECT username, email FROM users WHERE username = ? || emai = ?";
        $stmt = $dbcl->prepare($query);
        $stmt->bind_param('ss',$us, $e);
        $stmt->execute();
        $stmt->bind_result($cus,$ce);
        $stmt->fetch();
        if($us == $cus ){
           $taken = TRUE;
        }
        if ($e == $ce) {
            # code...
        }
    }
}
?>
<fieldset>
    <legend>Register</legend>
    <?php 

    if (isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        session_destroy();
        setcookie(session_name(),'',time()-3600);
    }
        echo isset($general_msg)?$general_msg:'';

    ?>
    <form action="registerForm.php" method="POST">
        
        <p>
            <label for = "email"> E-mail: </label>
            <input type="text" name="email" value ="<?php echo isset($safeData['email'])?$safeData['email']:'';?>"/>
            <span>
                <?php echo isset($errors['email'])?$errors['email']:'';?>
            </span>
        </p>
        <p>
            <label for = "first_name"> First Name: </label>
            <input type="text" name="first_name" value ="<?php echo isset($safeData['first_name'])?$safeData['first_name']:'';?>"/>
            <span>
                <?php echo isset($errors['first_name'])?$errors['first_name']:'';?>
            </span>
        </p>
        <p>
            <label for = "last_name"> Last Name: </label>
            <input type="text" name="last_name" value ="<?php echo isset($safeData['last_name'])?$safeData['last_name']:'';?>"/>
            <span>
                <?php echo isset($errors['last_name'])?$errors['last_name']:'';?>
            </span>
        </p>
        <p>
            <label for = "username"> Username: </label>
            <input type="text" name="username" value ="<?php echo isset($safeData['username'])?$safeData['username']:'';?>"/>
        
            <span>
                <?php echo isset($errors['usernname'])?$errors['username']:'';?>
            </span>
        </p>
        <p>
            <label for = "password"> Password: </label>
            <input type="text" name="password" value ="<?php echo isset($safeData['password'])?$safeData['password']:'';?>"/>
            <span>
                <?php echo isset($errors['password'])?$errors['password']:'';?>
            </span>
        </p>
        <p>
            <label for = "cnfrmpassword"> Confirm Password: </label>
            <input type="text" name="cnfrmpassword" value ="<?php echo isset($safeData['cnfrmpassword'])?$safeData['cnfrmpassword']:'';?>"/>
            <span>
                <?php echo isset($errors['cnfrmpassword'])?$errors['cnfrmpassword']:'';?>
            </span>
        </p>
        <p> 
            <input type='submit' name='register' value = 'Register' />
        </p>
            

    </form>
</fieldset>
<?php include FOOTER;?>


