<?php  
	session_start();

	$windowIndex 	= $_POST['windowIndex'] -1;

 	$shutters  		= $_POST['shutters'];
	$screens   		= $_POST['screens'];
	$profiles  		= $_POST['profiles'];
	$detailsNotes  	= $_POST['detailsNotes'];
	$pieces  		= $_POST['pieces'];

	$width			=$_POST['width'];
	$height			=$_POST['height'];
	$clearWidth		=$_POST['clearWidth'];
	$clearHeight	=$_POST['clearHeight'];

	$dimRight  		= $_POST['dimRight'];
 	$dimLeft  		= $_POST['dimLeft'];
 	$dimCenter  	= $_POST['dimCenter'];
 	$dimUp  		= $_POST['dimUp'];
 	$dimMiddle  	= $_POST['dimMiddle'];
 	$dimCentRight  	= $_POST['dimCentRight'];
	$dimCentLeft  	= $_POST['dimCentLeft'];
	 


	
 	
 	$_SESSION['Cart'][$windowIndex]['Shutters']			= $shutters;
	$_SESSION['Cart'][$windowIndex]['Screens']  		= $screens;
	$_SESSION['Cart'][$windowIndex]['Profile']  		= $profiles;
	$_SESSION['Cart'][$windowIndex]['DetailsNotes'] 	= $detailsNotes;
	$_SESSION['Cart'][$windowIndex]['Pieces'] 			= $pieces;

	$_SESSION['Cart'][$windowIndex]['Width'] 			= $width;
	$_SESSION['Cart'][$windowIndex]['Height'] 			= $height;
	$_SESSION['Cart'][$windowIndex]['ClearWidth'] 		= $clearWidth;
	$_SESSION['Cart'][$windowIndex]['ClearHeight'] 		= $clearHeight;


	$_SESSION['Cart'][$windowIndex]['DimRight']			=$dimRight;  		
 	$_SESSION['Cart'][$windowIndex]['DimLeft']			=$dimLeft;  		
 	$_SESSION['Cart'][$windowIndex]['DimCenter']		=$dimCenter; 
 	$_SESSION['Cart'][$windowIndex]['DimUp']			=$dimUp;  		
 	$_SESSION['Cart'][$windowIndex]['DimMiddle']		=$dimMiddle;  	
 	$_SESSION['Cart'][$windowIndex]['DimCentRight']		=$dimCentRight;  	
 	$_SESSION['Cart'][$windowIndex]['DimCentLeft']		=$dimCentLeft;  	 	
 	

?>
