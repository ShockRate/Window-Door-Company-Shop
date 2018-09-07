<?php

define('BASE_URL', 'http://localhost/test-shop/');
define('MYSQL', './inc/mysql_connection_link.php');
define('HEADER', './views/header.php');  
define('FOOTER', './views/footer.php');
define('ADMIN_EMAIL','s_tottas@epal.gr');

function between($val, $x, $y){

    $val_len = strlen($val);
    return ($val_len >= $x && $val_len <= $y)?TRUE:FALSE;

}