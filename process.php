<?php
session_start();

$sillIndex = $_POST['sillIndex']-1;
$_SESSION['index'] = $sillIndex;

echo  $_SESSION['index'];
