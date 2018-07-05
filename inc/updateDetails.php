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

	
	$dimCase1  		= $_POST['dimCase1'];
	$dimCase2  		= $_POST['dimCase2'];
	$dimCase3  		= $_POST['dimCase3'];
	$dimCase4  		= $_POST['dimCase4'];
	$dimCase5  		= $_POST['dimCase5'];
 	
 	$dimUp  		= $_POST['dimUp'];
 	$dimMiddle  	= $_POST['dimMiddle'];
 	
	
	 


	
 	
 	$_SESSION['Cart'][$windowIndex]['Shutters']			= $shutters;
	$_SESSION['Cart'][$windowIndex]['Screens']  		= $screens;
	$_SESSION['Cart'][$windowIndex]['Profile']  		= $profiles;
	$_SESSION['Cart'][$windowIndex]['DetailsNotes'] 	= $detailsNotes;
	$_SESSION['Cart'][$windowIndex]['Pieces'] 			= $pieces;

	$_SESSION['Cart'][$windowIndex]['Width'] 			= $width;
	$_SESSION['Cart'][$windowIndex]['Height'] 			= $height;
	$_SESSION['Cart'][$windowIndex]['ClearWidth'] 		= $clearWidth;
	$_SESSION['Cart'][$windowIndex]['ClearHeight'] 		= $clearHeight;
	
	$_SESSION['Cart'][$windowIndex]['dimCase1']			=$dimCase1; 
	$_SESSION['Cart'][$windowIndex]['dimCase2']			=$dimCase2;  	 		
 	$_SESSION['Cart'][$windowIndex]['dimCase3']			=$dimCase3;  
	$_SESSION['Cart'][$windowIndex]['dimCase4']			=$dimCase4;  	
	$_SESSION['Cart'][$windowIndex]['dimCase5']			=$dimCase5; 	
	 
 	$_SESSION['Cart'][$windowIndex]['DimUp']			=$dimUp;  		
 	$_SESSION['Cart'][$windowIndex]['DimMiddle']		=$dimMiddle;  	
 		 	
 	

?>
