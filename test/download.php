<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';
// use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
// use PhpOffice\PhpSpreadsheet\Cell\Cell;
// use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$spreadsheet            = new Spreadsheet();
$spreadsheet->getActiveSheet()->setCellValue('J5' , 'New file content')->getStyle('J5')->getFont()->setBold(true);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="myfile.xlsx"'); /*-- $filename is  xsl filename ---*/
header('Cache-Control: max-age=0');
$Excel_writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$Excel_writer->save('php://output');      
  ?>