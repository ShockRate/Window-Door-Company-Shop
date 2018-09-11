<?php
class CreateOrder{

    function newOrder($orderData){
        $_SESSION['order'] = array(
            "ID"        => time(),
            "Series"    => $orderData['series'], 
            "Glazzing"  => $orderData['glazzing'], 
            "Color"     => $orderData['color']
    
        );
        header('Location:'.BASE_URL.'index.php');
        exit();
    }

}