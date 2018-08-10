<?php
    session_start();

    require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';
    require 'order.php';
    require 'window.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/check.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/copyRows.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/config.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/tableBuilder.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/retrieveTypes.php';

    use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
    use PhpOffice\PhpSpreadsheet\Cell\Cell;
    use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
   
/** ===========================================================================================
 *  CLASSES
 * ============================================================================================
 */
        
        $Check          = new check;
        $CopyRows       = new copyRows;
        $reader         = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $order          = new order;
        $retrieveTypes  = new retriveTypes; 
       


  /** ===========================================================================================
 *  Μεταβλητές
 * ============================================================================================
 */
        // set page title
        $page_title             ="Products";
        // Retrieve data from Excel
        $tmpfname               = $_SERVER['DOCUMENT_ROOT'].'/test-shop/data/data.xlsx';
        $spreadsheet            = $reader->load($tmpfname);   
        $worksheet              = $spreadsheet->getActiveSheet();
        //Load TYPES data
        $typesfname             = $_SERVER['DOCUMENT_ROOT'].'/test-shop/data/typenames.xlsx';
        $typesSpreadsheet       = $reader->load($typesfname);  
        $typesWorksheet         = $typesSpreadsheet->getActiveSheet();
        // Php office variables
        $lastRow                = $worksheet->getHighestRow();
        $lastColl               = $worksheet->getHighestColumn();
        $highestColumnIndex     = Coordinate::columnIndexFromString($lastColl);
        $currow                 = $worksheet->getHighestRow('A'); 
        //Catches value when new item is added
        $newItem                = $Check->PagePostVars('newItem');
        //Catches value when whe set diferent siils 
        $newSills               = $Check->PagePostVars('newSills');
        
        //Other
        $addToCart              = $Check->PagePostVars('addToCart');
        $emptyCart              = $Check->PagePostVars('emptyCart');
        $varname                = "";
        $message                = "";        
        $series                 = $Check->PagePostVars('series');
        $color                  = $Check->PagePostVars('color'); 
        $glazzing               = $Check->PagePostVars('glazzing');
        $type                   = $Check->PagePostVars('type');
        $additionalProf         = $Check->PagePostVars('additionalProf');
        $rolls                  = $Check->PagePostVars('rolls');
        $screen                 = $Check->PagePostVars('screen');
        $mechanism              = $Check->PagePostVars('mechanism');
        $sita                   = $Check->PagePostVars('sita');

        $newOrder               = $Check->PagePostVars('newOrder');


if(isset($newOrder)){

    
    $order->setorder($_POST['series'], $_POST['glazzing'], $_POST['color']);

    $_SESSION['order'] = array(
            "ID"        => time(),
            "Series"    => $_POST['series'], 
            "Glazzing"  => $_POST['glazzing'], 
            "Color"     => $_POST['color']

    );
     echo $_SESSION['order']['ID'];
     echo $_SESSION['order']['Series'];
     echo $_SESSION['order']['Glazzing'];
     echo $_SESSION['order']['Color'];

    header("Location: index.php"); 

}


if (isset($newItem)) {
                
                
               
                $item = new testWindow($_POST['aa'], $_POST['productType'], 1, $_POST['width'], $_POST['height'] );
             
                echo "<br>";
                echo "meters";
                $_SESSION['Cart'][] = array(

                     "ID"           => $item->getId(),
                     "Type"         => $_POST['productType'],
                     "Name"         => $_POST['productName'],
                     "Class"        => $_POST['productClass'],
                     "Width"        => $item->getWidth(),
                     "Height"       => $item->getHeight(),
                     "ClearWidth"   => $item->getWidth()-5,
                     "ClearHeight"  => $item->getHeight()-5,
                     "Sills"        => "images/shifts/UDLR.png",
                     "Profile"      => "",
                     "Shutters"     => "",
                     "Slats"        => "",
                     "Mechanism"    => "",
                     "Screens"      => "",
                     "DetailsNotes" => "",
                     "SillUp"       => "2.5",
                     "SillDown"     => "2.5",
                     "SillLeft"     => "2.5",
                     "SillRight"    => "2.5",
                     "Pieces"       => "1",
                     "Color"        =>  $_SESSION['order']['Color'],
                     "Glazzing"     =>  $_SESSION['order']['GLazzing'],
                     "Series"       =>  $_SESSION['order']['Series'],
                     "dimCase1"     => " ",
                     "dimCase2"     => " ",
                     "dimCase3"     => " ",
                     "dimCase4"     => " ",
                     "dimCase5"     => " ",                   
                     "DimUp"        => " ",
                     "DimMiddle"    => " "


                    
                );

                
                header("Location: index.php");                   
            }


       
            
    
?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!--  Για να δουλευει σον chrome? -->
    <meta http-equiv="pragma" content="no-cache" />
 
    <title>EPAL Shop</title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="libs/css/builder.css" rel="stylesheet" media="screen"> 
    <link href="libs/css/index.css" rel="stylesheet" media="screen"> 
    <link href="libs/css/modal.css" rel="stylesheet" media="screen"> 
    <!-- <link href="libs/css/modalTestCss.css" rel="stylesheet" media="screen">  -->
    
   
   
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 


</head>
<body>

 <?php include_once 'views/navigation.php'; ?>

<div class="container">


<?php
        if (isset($_SESSION['order']) && !empty($_SESSION['order'])){
            
            
            //include_once 'views/V2designModal.php';
            include_once 'views/viewCreateFrame.php';
            include_once 'views/viewDetails.php';
            include_once 'views/viewOrderDetails.php';
            //include_once 'views/viewCart.php';   
            include_once 'views/viewOrderTable.php';
            include_once 'views/viewFrameSill.php';
                   
        } else {
            include_once 'views/viewCreateOrder.php'; 

        }
 
  ?> 
  <!-- TESTING CODE-->
  <?php

  ?>
  <!--END OF TESTIGN CODE -->
  
     
</div>



<script type="text/javascript" src="libs/js/test-shop.js"></script>


</body>
</html>