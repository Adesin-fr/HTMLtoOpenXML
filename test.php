<?php

	// this is a test page for HTMLtoOpenXML 
	
	require_once "Scripts/HTMLtoOpenXML.php";
	
	$html = "wouhou <b>g�nial</b> yeah !";
	
	$toOpenXML = HTMLtoOpenXML::getInstance()->fromHTML($html);
	
	echo htmlentities($toOpenXML);


?>