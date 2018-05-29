<?php

	use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
    use PhpOffice\PhpSpreadsheet\Cell\Cell;
    use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
/**
* 
*/
class fetchData 
{
		private $tmpfname 			= $_SERVER['DOCUMENT_ROOT'].'/test-shop/data/data.xlsx';
    	private $spreadsheet 		= $reader->load($tmpfname);   
    	private $worksheet 			= $spreadsheet->getActiveSheet();
	function __construct()
	{
		# code...
	}

	public getShutters(){
		
	}
}