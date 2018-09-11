<?php
/** ===========================================================================================
 *  REGISTER FORM
 * ============================================================================================
 */
?>
<fieldset>   
     
<div class="loginBox">
<img src="test-code/loginForm/user.png" class="user">
<h2>Register</h2>
<form action="index.php?nav=register" method="POST">        
    <p>
        <label for = "email"> E-mail: </label>
        <br>
        <span>
            <?php echo isset($errors['email'])?$errors['email']:'';?>
        </span>
        <input type="text" name="email" value ="<?php echo isset($safeData['email'])?$safeData['email']:'';?>"/>
        
    </p>
    <div>
    <p>
        <label for = "first_name"> First Name: </label>
        <br>
        <span>
            <?php echo isset($errors['first_name'])?$errors['first_name']:'';?>
        </span>
        <input type="text" name="first_name" value ="<?php echo isset($safeData['first_name'])?$safeData['first_name']:'';?>"/>
        
    </p>
    <p>
        <label for = "last_name"> Last Name: </label>
        <br>
        <span>
            <?php echo isset($errors['last_name'])?$errors['last_name']:'';?>
        </span>
        <input type="text" name="last_name" value ="<?php echo isset($safeData['last_name'])?$safeData['last_name']:'';?>"/>
    </p>
    </div>
    <p>
        <label for = "username"> Username: </label>
        <br>
        <span>
            <?php echo isset($errors['username'])?$errors['username']:'';?>
        </span>
        <input type="text" name="username" value ="<?php echo isset($safeData['username'])?$safeData['username']:'';?>"/>
    </p>
    <p>
        <label for = "password"> Password: </label>
        <br>
        <span>
            <?php echo isset($errors['password'])?$errors['password']:'';?>
        </span>
        <input type="password" name="password" value ="<?php echo isset($safeData['password'])?$safeData['password']:'';?>"/>
    </p>
    <p>
        <label for = "cnfrmpassword"> Confirm Password: </label>
        <br>
        <span>
            <?php echo isset($errors['cnfrmpassword'])?$errors['cnfrmpassword']:'';?>
        </span>
        <input type="password" name="cnfrmpassword" value ="<?php echo isset($safeData['cnfrmpassword'])?$safeData['cnfrmpassword']:'';?>"/>
    </p>
    <p> 
        <input type='submit' name='register' value = 'Register' />
    </p>
</form>
<a href="index.php">Log In</a>
</fieldset>  
</div>



