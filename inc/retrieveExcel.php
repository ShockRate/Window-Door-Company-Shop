<?php

require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class retrieveExcel{
    var $worksheet;

    // function __construct() {
    //     $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    //     $typesfname             = $_SERVER['DOCUMENT_ROOT'].'/test-shop/data/types.xlsx';
    //     $this->worksheet   = $reader->load($typesfname);  
    // }

    function __construct($fileName) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $this->worksheet = $reader->load($fileName);  
    }
    function activeSheet() {
        return $this->worksheet->getActiveSheet();
    }

    function getCategoriesNames(){
        return $typesSheets    = $this->worksheet->getSheetNames();
        // foreach ($typesSheets as $sheets) {
        //     echo $sheets;
        //     echo '<br>';
        // }
    }
    function getCategoriesSum(){
        return $this->worksheet->getSheetCount(); 
    }

    function getCategorybyName($name){
        return $this->worksheet->getSheetByName($name);
    }
    function getCategoryHighestRow($name){
        return $this->worksheet->getSheetByName($name)->getHighestRow();

    }
    function getCellVal($name, $col, $row){
        return $this->worksheet->getSheetByName($name)->getCellByColumnAndRow($col,$row)->getValue();
    }

}
?>