<?php
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	$f = 0;
	if(isset($_POST["roll"]) && $_POST["roll"] != "") {
		$e = simplexml_load_file("database.xml");
		foreach ($e -> student as $a) {
			if($a -> Roll == $_POST["roll"]) {
				$f = 1;
				$a -> Name = $_POST["name"];
				$a -> Institution = $_POST["insti"];
			}
		}
		$e -> asXML("database.xml");
		if($f == 0) {
			echo "Roll No not found in the database";
		} else {
			echo "Record Updated in the database";
		}
	} else {
		echo "Enter the data first";
	}
?>