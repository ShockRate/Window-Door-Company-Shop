<?php
 require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';
 include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/check.php';
    use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
    use PhpOffice\PhpSpreadsheet\Cell\Cell;
    use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
        $Check                  = new check;
        $reader                 = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $tmpfname               = $_SERVER['DOCUMENT_ROOT'].'/test-shop/data/data.xlsx';
        $spreadsheet            = $reader->load($tmpfname);   
        $worksheet              = $spreadsheet->getActiveSheet();
        $typesfname             = $_SERVER['DOCUMENT_ROOT'].'/test-shop/data/typenames.xlsx';
        $typesSpreadsheet       = $reader->load($typesfname);  
        $typesWorksheet         = $typesSpreadsheet->getActiveSheet();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Windows Builder Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="libs/css/builder.css" rel="stylesheet" media="screen"> 
    <link href="libs/css/index.css" rel="stylesheet" media="screen"> 
    <link href="libs/css/modal.css" rel="stylesheet" media="screen"> 

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
      include_once 'Views/builder/bldDualActionDualFgg.php';

      include_once 'Views/builder/bldTripleActionTripleFgg.php';
      include_once 'Views/V2designModal.php';
      
    ?>

            
    <script type="text/javascript" src="libs/js/modalTestJs.js"></script>
  </body>
</html>