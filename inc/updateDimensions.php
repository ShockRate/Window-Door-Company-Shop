<?php
	session_start();

	$windowIndex 	= $_POST['windowIndex'] -1;
 	$dimRight  		= $_POST['dimRight'];
 	$dimLeft  		= $_POST['dimLeft'];
 	$dimCenter  	= $_POST['dimCenter'];
 	// $dimUp  		= $_POST['dimUp'];
 	// $dimMiddle  	= $_POST['dimMiddle'];
 	// $dimCentRight  	= $_POST['dimCentRight'];
 	// $dimCentLeft  	= $_POST['dimCentLeft'];
	

	$_SESSION['Cart'][$windowIndex]['DimRight']			=$dimRight;  		
 	$_SESSION['Cart'][$windowIndex]['DimLeft']			=$dimLeft;  		
 	$_SESSION['Cart'][$windowIndex]['DimCenter']		=$dimCenter;  	
 	// $_SESSION['Cart'][$windowIndex]['DimUp']			=$dimUp;  		
 	// $_SESSION['Cart'][$windowIndex]['DimMiddle']		=$dimMiddle;  	
 	// $_SESSION['Cart'][$windowIndex]['DimCentRight']		=$dimCentRight;  	
 	// $_SESSION['Cart'][$windowIndex]['DimCentLeft']		=$dimCentLeft;  	
?>