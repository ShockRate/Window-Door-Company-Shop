<?php
	session_start();

	$windowIndex 	= $_POST['windowIndex'] -1;
 	$dimCase5  		= $_POST['dimCase5'];
 	$dimCase1  		= $_POST['dimCase1'];
 	$dimCase3  	= $_POST['dimCase3'];
 	// $dimUp  		= $_POST['dimUp'];
 	// $dimMiddle  	= $_POST['dimMiddle'];
 	// $dimCase4  	= $_POST['dimCase4'];
 	// $dimCase2  	= $_POST['dimCase2'];
	

	$_SESSION['Cart'][$windowIndex]['dimCase5']			=$dimCase5;  		
 	$_SESSION['Cart'][$windowIndex]['dimCase1']			=$dimCase1;  		
 	$_SESSION['Cart'][$windowIndex]['dimCase3']		=$dimCase3;  	
 	// $_SESSION['Cart'][$windowIndex]['DimUp']			=$dimUp;  		
 	// $_SESSION['Cart'][$windowIndex]['DimMiddle']		=$dimMiddle;  	
 	// $_SESSION['Cart'][$windowIndex]['dimCase4']		=$dimCase4;  	
 	// $_SESSION['Cart'][$windowIndex]['dimCase2']		=$dimCase2;  	
?>