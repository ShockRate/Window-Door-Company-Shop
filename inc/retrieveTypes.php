<?php

require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class retriveTypes{
    var $typesSpreadsheet;

    function __construct() {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $typesfname             = $_SERVER['DOCUMENT_ROOT'].'/test-shop/data/types.xlsx';
        $this->typesSpreadsheet       = $reader->load($typesfname);  
    }

    function getSheetNames(){
        $typesSheets         = $this->typesSpreadsheet->getSheetNames();
        foreach ($typesSheets as $sheets) {
            echo $sheets;
            echo '<br>';
        }
    }

}
?>