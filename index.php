<html>
<body>
	<h1> DBMS Lab </h1>
	<h3> Insert Data into the XML Database </h3>
	<form name = "insert" method = "post" action = "insert.php"> 
		Name : <input type = "text" name = "name"/> <br/><br>
		Roll No : <input type = "text" name = "roll"/> <br/><br>
		Institution : <input type = "text" name = "insti"/> <br/><br>
		<input type = "submit"  value = "Insert"/>
	</form>
	<br>
	<h3> Update Data in the XML Database </h3>
	<form name = "update" method = "post" action = "update.php"> 
		Name : <input type = "text" name = "name"/> <br/><br>
		Roll No : <input type = "text" name = "roll"/> <br/><br>
		Institution : <input type = "text" name = "insti"/> <br/><br>
		<input type = "submit"  value = "Update"/>
	</form>
	<br>
	<h3>Delete a Student's record from the database</h3>
	<form name = "delete" method = "post" action = "delete.php">
		Roll No : <input type = "text" name = "roll"/> <br/><br>
		<input type = "submit" value = "Submit"/>
	</form>
	<br>
	<h3>Display all the records in the database</h3>
	<form name = "display" method = "post" action = "display.php">
		<input type = "submit" value = "Submit"/>
	</form>
</body>
</html>