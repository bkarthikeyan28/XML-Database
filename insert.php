<?php
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	if(isset($_POST["name"]) && $_POST["name"] != "") {
		$sxe = new SimpleXMLElement(file_get_contents("database.xml"));
		$student = $sxe->addChild('student');
		$student->addChild('Name', $_POST["name"]);
		$student->addChild('Roll', $_POST["roll"]);
		$student->addChild('Institution', $_POST["insti"]);
		$sxe = $sxe -> asXML();
		$dom = new DOMDocument("1.0");
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($sxe);
		$sxe = $dom -> saveXML();
		file_put_contents("database.xml", $sxe);
		echo "Data inserted into the xml";
	} else {
		echo "Fill the form completely";
	}
?>