<?php

require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class retriveTypes{
    var $typesWorkSheet;

    function __construct() {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $typesfname             = $_SERVER['DOCUMENT_ROOT'].'/test-shop/data/types.xlsx';
        $this->typesWorkSheet   = $reader->load($typesfname);  
    }

    function getCategoriesNames(){
        return $typesSheets    = $this->typesWorkSheet->getSheetNames();
        // foreach ($typesSheets as $sheets) {
        //     echo $sheets;
        //     echo '<br>';
        // }
    }
    function getCategoriesSum(){
        return $this->typesWorkSheet->getSheetCount(); 
    }

    function getCategorybyName($name){
        return $this->typesWorkSheet->getSheetByName($name);
    }
    function getCategoryHighestRow($name){
        return $this->typesWorkSheet->getSheetByName($name)->getHighestRow();

    }
    function getCellVal($name, $col, $row){
        return $this->typesWorkSheet->getSheetByName($name)->getCellByColumnAndRow($col,$row)->getValue();
    }

}
?>