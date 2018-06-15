<?php  
	session_start();

	$windowIndex 	= $_POST['windowIndex'] -1;
 	$shutters  		= $_POST['shutters'];
	$screens   		= $_POST['screens'];
	$profiles  		= $_POST['profiles'];
	$detailsNotes  	= $_POST['detailsNotes'];
	$pieces  		= $_POST['pieces'];

	$_SESSION['Cart'][$windowIndex]['Shutters']			= $shutters;
	$_SESSION['Cart'][$windowIndex]['Screens']  		= $screens;
	$_SESSION['Cart'][$windowIndex]['Profile']  		= $profiles;
	$_SESSION['Cart'][$windowIndex]['DetailsNotes'] 	= $detailsNotes;
	$_SESSION['Cart'][$windowIndex]['Pieces'] 			= $pieces;


	

?>
