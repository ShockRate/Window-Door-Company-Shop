<?php 
// require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';
// use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
// use PhpOffice\PhpSpreadsheet\Cell\Cell;
// use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/check.php';
 
  
if(isset($_POST['download']) && ($_POST['download'] == 'Download Excel')) {        
    require_once('download.php');   
} else {    
?>
<!DOCTYPE html>
<html>
<head>
    <title>test-shop folder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <form method="post" action="indexx.php">
        <div style="text-align: center;">
             <input type="submit" value="Download Excel" class="btn btn-primary" name="download">
        </div>
     </form>
</body>
</html>
<?php }?>