<?php 
// CONNECTION WITH LOCAL (xampp) DATABASE 
$config = parse_ini_file('./data/db.ini');
define('DB_USER', $config['username']); 
define('DB_PASSWORD', $config['password']);
define('DB_HOST', 'localhost');
define('DB_NAME', $config['db']);



$dbcl = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($dbcl->connect_error){
    die('Connection failed. Could not connect to MySQL: '.$dbcl->connect_error);
} else {
    $dbcl->set_charset('utf8');
}