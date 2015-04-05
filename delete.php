<?php
	if(isset($_POST["roll"])) {
		$e = simplexml_load_file("database.xml");
		$count = 0;
		foreach ($e -> student as $a) {
			if($a -> Roll == $_POST["roll"]) {
				unset($e -> student[$count]);
			}
			$count++;
		}
		file_put_contents("database.xml", $e -> saveXML());
		echo "Roll No : ".$_POST["roll"]." erased from the database";
	} else {
		echo "Enter the delete fields first";
	}
?>