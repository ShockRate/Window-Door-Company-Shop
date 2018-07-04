<?php
class tableBuilder{
	protected $message = "";

	function __construct() {

}

  


  public function _printImg($type, $class, $dimLeft, $dimCenter, $dimRight, $dimUp, $dimMiddle, $dimCentLeft, $dimCentRight){
    if ($class == 2) {
      # code...
      $message = file_get_contents('./views/builder/idxDualAction.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
    } elseif ($class == 3) {
      # code...
      $message = file_get_contents('./views/builder/idxTripleAction.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimCenter",(string)($dimCenter),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
    } elseif ($class == 4) {
      # code...
      $message = file_get_contents('./views/builder/idxSingleActionSingleFgg.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimUp",(string)($dimUp),$message);
      $message = str_replace("_dimMiddle",(string)($dimMiddle),$message);
    } elseif ($class == 5) {
      # code...
      $message = file_get_contents('./views/builder/idxDualActionDualFgg.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
      $message = str_replace("_dimUp",(string)($dimUp),$message);
      $message = str_replace("_dimMiddle",(string)($dimMiddle),$message);  
    } elseif ($class == 6) {
      # code...
      $message = file_get_contents('./views/builder/idxDualActionSingleFgg.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
      $message = str_replace("_dimUp",(string)($dimUp),$message);
      $message = str_replace("_dimMiddle",(string)($dimMiddle),$message);  
    } elseif ($class == 2.2) {
      # code...
      $message = file_get_contents('./views/builder/idxDualActionDualFgg.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
      $message = str_replace("_dimUp",(string)($dimUp),$message);
      $message = str_replace("_dimMiddle",(string)($dimMiddle),$message);   
     } elseif ($class == 8) {
      # code...
      $message = file_get_contents('./views/builder/idxTripleActionSingleFgg.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimCenter",(string)($dimCenter),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
      $message = str_replace("_dimUp",(string)($dimUp),$message);
      $message = str_replace("_dimMiddle",(string)($dimMiddle),$message);  
     } elseif ($class == 9) {
      # code...
      $message = file_get_contents('./views/builder/idxTripleActionTripleFgg.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimCenter",(string)($dimCenter),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
      $message = str_replace("_dimUp",(string)($dimUp),$message);
      $message = str_replace("_dimMiddle",(string)($dimMiddle),$message);  
     } elseif ($class == 11) {
      # code...
      $message = file_get_contents('./views/builder/idxFixEntr.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimCenter",(string)($dimCenter),$message);    
     } elseif ($class == 12) {
      # code...
      $message = file_get_contents('./views/builder/idxEntrFix.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimCenter",(string)($dimCenter),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
     } elseif ($class == 13) {
      # code...
      $message = file_get_contents('./views/builder/idxFixEntrFix.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimCenter",(string)($dimCenter),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
     } elseif ($class == 14) {
      # code...
      $message = file_get_contents('./views/builder/idxFixEntrFixFgg.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimCenter",(string)($dimCenter),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
      $message = str_replace("_dimUp",(string)($dimUp),$message);
      $message = str_replace("_dimMiddle",(string)($dimMiddle),$message); 
     } elseif ($class == 15) {
      # code...
      $message = file_get_contents('./views/builder/idxQuadrableAction.php');
      $message = str_replace("_imgSrc", $type ,$message);
      $message = str_replace("_dimLeft",(string)($dimLeft),$message);
      $message = str_replace("_dimCentLeft",(string)($dimCentLeft),$message);     
      $message = str_replace("_dimCentRight",(string)($dimCentRight),$message);
      $message = str_replace("_dimRight",(string)($dimRight),$message);
    } else {
      $message = file_get_contents('./views/builder/idxSingleAction.php');
      $message = str_replace("_imgSrc", $type ,$message);
    }

    
            return $message;
  }
}

?>

