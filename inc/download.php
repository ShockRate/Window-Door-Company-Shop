<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/copyRows.php';
// use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
// use PhpOffice\PhpSpreadsheet\Cell\Cell;
// use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
//$spreadsheet            = new Spreadsheet();
$tmpfname               = $_SERVER['DOCUMENT_ROOT'].'/test-shop/3_Prototype.xlsx';
$CopyRows       		= new copyRows;
$reader 				= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet            = $reader->load($tmpfname);   
$worksheet              = $spreadsheet->getActiveSheet();
if (isset($_SESSION['Cart']) && !empty($_SESSION['Cart'])){	
$index 					= 5;
$pushval 				= 5;
$counter 				= 1;

for ($i=0; $i < (sizeof($_SESSION['Cart'])-1); $i++) { 
               
            $CopyRows->pushRows($worksheet, 5, 3+$pushval, 3, 24);
            $pushval = $pushval +3;
            }			
foreach ($_SESSION['Cart'] as $arr) { 
	$worksheet->setCellValue('A'.$index, $counter);
	$worksheet->setCellValue('C'.$index , $arr['Name'])->getStyle('J'.$index)->getFont()->setBold(true);
	//$spreadsheet->getActiveSheet()->setCellValue('J'.$index , $arr['Type'])->getStyle('J'.$index)->getFont()->setBold(true);
	$worksheet->setCellValue('G'.$index, $arr['Width'].' '."\r\n".' '.$arr['Height'] );
	$worksheet->setCellValue('K'.$index, $arr['ClearWidth'].' '."\r\n".' '.$arr['ClearHeight'] );
	$worksheet->setCellValue('Q'.$index , $arr['Profile']);
	$worksheet->setCellValue('Q'.($index+1) , $arr['Shutters']);
	$worksheet->setCellValue('T'.($index+1) , $arr['Screens']);
	//ADD PRODUCT IMAGE AND DIMENSIONS
    $CopyRows->addImage('../images/Small/'.$arr['Type'].'.jpg',$arr['Type'].'jpg','M'.$index,$spreadsheet->getActiveSheet());
    $worksheet->setCellValue('L'.$index , $arr['DimUp']);
    $worksheet->setCellValue('L'.($index+1) , $arr['DimMiddle']);
    $worksheet->setCellValue('M'.($index+2) , $arr['DimLeft']);
    $worksheet->setCellValue('N'.($index+2) , $arr['DimCenter']);
    $worksheet->setCellValue('O'.($index+2) , $arr['DimRight']);
    //Add siils
    $CopyRows->addSillImage('../'.$arr['Sills'],$arr['Sills'],'I'.($index+1),$spreadsheet->getActiveSheet());
    $worksheet->setCellValue('I'.$index , $arr['SillUp']);
    $worksheet->setCellValue('I'.($index+2) , $arr['SillDown']);
    $worksheet->setCellValue('H'.($index+1) , $arr['SillLeft']);
    $worksheet->setCellValue('J'.($index+1) , $arr['SillRight']);

	$index=$index+3;
}
}
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="myfile.xlsx"'); /*-- $filename is  xsl filename ---*/
header('Cache-Control: max-age=0');
$Excel_writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$Excel_writer->save('php://output');      
  ?>