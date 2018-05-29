<?php 

session_start();
require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';

include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/check.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/config.php';

 /*
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
*/

$Check = new check;

$worksheet = $_SESSION['Worksheet'];
echo $worksheet->getCellByColumnAndRow('1','1')->getValue();
echo $_POST[$worksheet->getCellByColumnAndRow('1','1')->getValue()];
//$selected = $_POST[$worksheet->getCellByColumnAndRow('1','1')->getValue()];
 //echo $selected;

 ?>