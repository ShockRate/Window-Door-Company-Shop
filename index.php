<?php
    session_start();

    require $_SERVER['DOCUMENT_ROOT'].'/test-shop/vendor/autoload.php';
    require 'order.php';
    require 'window.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/check.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/copyRows.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/config.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/tableBuilder.php';

    include_once $_SERVER['DOCUMENT_ROOT'].'/test-shop/inc/retrieveExcel.php';

    include 'inc/preferences.php';

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
        $retrieveTypes  = new retrieveExcel($_SERVER['DOCUMENT_ROOT'].'/test-shop/data/types.xlsx'); 
        $retrieveData   = new retrieveExcel($_SERVER['DOCUMENT_ROOT'].'/test-shop/data/data.xlsx');
        //ΕΞΕΛ ΜΕ LOGIN CREDENTIALS ΓΙΑ ΔΟΚΙΜΗ
        $login = new retrieveExcel($_SERVER['DOCUMENT_ROOT'].'/test-shop/test-code/testcredits.xlsx');
       


  /** ===========================================================================================
 *  Μεταβλητές
 * ============================================================================================
 */
        // set login var
        $loggedIn=$admin=FALSE;

        // set page title
        $page_title             ="EPAL Shop";
        $page_header_title      ="Home Page";
        
        $worksheet              = $retrieveData->activeSheet();
        
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


if (isset($_SESSION['user_id'])) {
    $loggedIn = TRUE;
    if (isset($_SESSION['user_level'])) {
        if ($_SESSION['user_level'] == 1) {
            $admin = TRUE;
        }
    }
}
// if(isset($newOrder)){

    
//     $order->setorder($_POST['series'], $_POST['glazzing'], $_POST['color']);

//     $_SESSION['order'] = array(
//             "ID"        => time(),
//             "Series"    => $_POST['series'], 
//             "Glazzing"  => $_POST['glazzing'], 
//             "Color"     => $_POST['color']

//     );
//      echo $_SESSION['order']['ID'];
//      echo $_SESSION['order']['Series'];
//      echo $_SESSION['order']['Glazzing'];
//      echo $_SESSION['order']['Color'];

//     header("Location: index.php"); 

// }


if (isset($newItem)) {
                
                $item = new testWindow($_POST['aa'], $_POST['productType'], 1, $_POST['width'], $_POST['height'] );
             
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
                     "Glazzing"     =>  $_SESSION['order']['Glazzing'],
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


       
            
            include_once HEADER;
            if ($loggedIn) {
                if (isset($_SESSION['order']) && !empty($_SESSION['order'])){
                    include_once 'views/viewCreateFrame.php';
                    include_once 'views/viewDetails.php';
                    include_once 'views/viewOrderDetails.php';
                    include_once 'views/viewOrderTable.php';
                    include_once 'views/viewFrameSill.php';                         
                } else {  
                    include_once 'views/viewCreateOrder.php'; 
                }
                
                       
                    
                        //include_once 'test-code/orderCtrl.php';
                       
            } else {
                
                include_once 'registerCtrl.php'; 
            }
            include_once FOOTER;
  ?> 
 