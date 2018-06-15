<?php
	session_start();

	$windowIndex 	= $_POST['windowIndex'] -1;
	$width			= $_SESSION['Cart'][$windowIndex]['Width'];
	$height			= $_SESSION['Cart'][$windowIndex]['Height'];
	$clearwidth		= $_SESSION['Cart'][$windowIndex]['ClearWidth'];
	$clearheight	= $_SESSION['Cart'][$windowIndex]['ClearHeight'];
	
	
	
	echo json_encode(array("width" => $width, "height" => $height, "clearwidth" => $clearwidth, "clearheight" => $clearheight));
	//echo json_encode(array("width" => $width, "height" => $height));
	//echo "result";
?>