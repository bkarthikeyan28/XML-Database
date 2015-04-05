<?php
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	$e = simplexml_load_file("database.xml");
	$count = 1;
	foreach ($e -> student as $a) {
		echo "<h1>Student ".$count."</h1><br>";
		echo "<strong>Name : </strong>".$a -> Name."<br><br>";
		echo "<strong>Roll No : </strong>".$a -> Roll."<br><br>";
		echo "<strong>Institution : </strong>".$a -> Institution."<br><br>";
		$count ++;
	}
	if($count == 1) {
		echo "<h1>No records found in the database</h1>";
	}
?>