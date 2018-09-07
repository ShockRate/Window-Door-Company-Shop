<?php
/** ===========================================================================================
 *  ACTIVATE FORM
 * ============================================================================================
 */
?>
<form action="/inc/activate.php" method="POST">
    <p>
        <label for="id"> E-mail/username:</label>
        <input type="text" name="id" value="<?php echo isset($id)?$id:'';?>"/>
    </p>
    <p>
        <input type="submit" name="activate" value="Send activation link"/>
    </p>
    
</form>