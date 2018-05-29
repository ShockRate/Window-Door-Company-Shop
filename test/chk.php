<?php
require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';

	include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/check.php';
    //include_once '../inc/phpmailer.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/copyRows.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/config.php';

    use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
    use PhpOffice\PhpSpreadsheet\Cell\Cell;
    use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
   
/** ===========================================================================================
 *  Klassen laden
 * ============================================================================================
 */
		
		$Check          = new check;
	    $CopyRows       = new copyRows;
	    $reader         = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

  /** ===========================================================================================
 *  Μεταβλητές
 * ============================================================================================
 */
    	// set page title
		$page_title="Products";

		$tmpfname 			= $_SERVER['DOCUMENT_ROOT'].'/test-shop/data/data.xlsx';
    	$spreadsheet 		= $reader->load($tmpfname);   
    	$worksheet 			= $spreadsheet->getActiveSheet();   
		$lastRow 			= $worksheet->getHighestRow();
		$lastColl			= $worksheet->getHighestColumn();
		$highestColumnIndex = Coordinate::columnIndexFromString($lastColl);
		$varname 			= "";

		$type            	= $Check->PagePostVars('type');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TESTING</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="libs/css/chk.css" rel="stylesheet" media="screen">

</head>
<body>
	<div class="container">
		<div class="row">
		<?php echo $lastRow; ?>	
		<br/>
			<div class="panel-body fbody">
				<?php for ($row = 3; $row <=  $worksheet->getHighestRow('D'); ++ $row) { 
							$varname =$worksheet->getCellByColumnAndRow('4',"$row")->getValue(); ?>

							<label class="checkbox-inline">
							<div class="test">
	                		<img src='images/<?php echo $varname;?>.jpg' width="85" height="94" alt="<?php echo $varname;?>" />
	                		<br />
	                		
	                		<input type="radio" name="fenstertyp" id="contype" value="<?php echo $varname;?>" <?php echo $Check->RadioChecked($type, $varname) ?>> <?php echo $varname;?> 
	                		</div> 

	            			</label>
				<?php }?>	
			</div>
     	</div>
 	</div>
</body>
</html>