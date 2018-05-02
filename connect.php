<?php
	//connection to mysql server
	
	$username = $_GET['name'];
	$passwrd = $_GET['password'];

	$link = mysql_connect("localhost","$username","$passwrd");

	if ($link){
		print "You're connected to MySQL Server <br>";
	} else {
		print "cannot connect <br>";
	}

	//connection to the database
	mysql_select_db("menagerie")
	or die("Could not select the database");


	//inserting data
	$insert = mysql_query("INSERT INTO pet VALUES('Fluffy', 'Harold', 'cat', 'f', '1993-02-04', NULL)");

	if ($insert){
		print "Successfully added new info <br>";
	} else {
		print "Cannot insert new info <br>";
	}

	//deleting data
	/*$delete = mysql_query("DELETE FROM pet WHERE name='Fluffy'");

	if($delete){
		print "Successfully updated info";
	} else {
		print "Cannot update";
	}*/

?>