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
$tmpfname               = $_SERVER['DOCUMENT_ROOT'].'/test-shop/2_Prototype.xlsx';
$CopyRows       		= new copyRows;
$reader 				= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet            = $reader->load($tmpfname);   
$worksheet              = $spreadsheet->getActiveSheet();
if (isset($_SESSION['Cart']) && !empty($_SESSION['Cart'])){	
$index 					= 5;
$pushval 				= 5;
$counter 				= 1;
// for ($i=0; $i < (sizeof($_SESSION['Cart'])-1); $i++) { 
               
//             $CopyRows->pushRows($worksheet, 5, 3+$pushval, 3, 20);
//             $pushval = $pushval +3;
//             }			
// foreach ($_SESSION['Cart'] as $arr) { 
// 	$worksheet->setCellValue('A'.$index, $counter);
// 	$worksheet->setCellValue('C'.$index , $arr['Name'])->getStyle('J'.$index)->getFont()->setBold(true);
// 	//$spreadsheet->getActiveSheet()->setCellValue('J'.$index , $arr['Type'])->getStyle('J'.$index)->getFont()->setBold(true);
// 	$worksheet->setCellValue('G'.$index, $arr['Width'].' '."\r\n".' '.$arr['Height'] );
// 	$worksheet->setCellValue('K'.$index, $arr['ClearWidth'].' '."\r\n".' '.$arr['ClearHeight'] );
// 	$worksheet->setCellValue('M'.$index , $arr['Profile']);
// 	$worksheet->setCellValue('M'.($index+1) , $arr['Shutters']);
// 	$worksheet->setCellValue('P'.($index+1) , $arr['Screens']);
// 	//ADD IMAGE
//     $CopyRows->addImage('../images/Small/'.$arr['Type'].'.jpg',$arr['Type'].'jpg','L'.$index,$spreadsheet->getActiveSheet());
//     //Add siils
//     $CopyRows->addSillImage('../'.$arr['Sills'],$arr['Sills'],'I'.($index+1),$spreadsheet->getActiveSheet());
//     $worksheet->setCellValue('I'.$index , $arr['SillUp']);
//     $worksheet->setCellValue('I'.($index+2) , $arr['SillDown']);
//     $worksheet->setCellValue('H'.($index+1) , $arr['SillLeft']);
//     $worksheet->setCellValue('J'.($index+1) , $arr['SillRight']);

// 	$index=$index+3;
// }
for ($i=0; $i < (sizeof($_SESSION['Cart'])-1); $i++) { 
               
            $CopyRows->pushRows($worksheet, 5, 3+$pushval, 3, 23);
            $pushval = $pushval +3;
            }			
foreach ($_SESSION['Cart'] as $arr) { 
	$worksheet->setCellValue('A'.$index, $counter);
	$worksheet->setCellValue('C'.$index , $arr['Name'])->getStyle('J'.$index)->getFont()->setBold(true);
	//$spreadsheet->getActiveSheet()->setCellValue('J'.$index , $arr['Type'])->getStyle('J'.$index)->getFont()->setBold(true);
	$worksheet->setCellValue('G'.$index, $arr['Width'].' '."\r\n".' '.$arr['Height'] );
	$worksheet->setCellValue('K'.$index, $arr['ClearWidth'].' '."\r\n".' '.$arr['ClearHeight'] );
	$worksheet->setCellValue('P'.$index , $arr['Profile']);
	$worksheet->setCellValue('P'.($index+1) , $arr['Shutters']);
	$worksheet->setCellValue('S'.($index+1) , $arr['Screens']);
	//ADD IMAGE
    $CopyRows->addImage('../images/Small/'.$arr['Type'].'.jpg',$arr['Type'].'jpg','L'.($index+1),$spreadsheet->getActiveSheet());
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