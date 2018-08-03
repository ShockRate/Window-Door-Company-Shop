<?php 
// CONNECTION WITH LOCAL (xampp) DATABASE 

define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'shopdb');



$dbcl = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($dbcl->connect_error){
    die('Connection failed. COuld not connect to MySQL: '.$dbcl->connect_error);
} else {
    $dbcl->set_charset('utf8');
}