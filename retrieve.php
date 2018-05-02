<?php
	//connection to mysql server

	$link = mysqli_connect("localhost","root","", "menagerie");

	if ($link){
		print "You're connected to MySQL Server <br>";
	} else {
		print "cannot connect <br>";
	}


	$query = ("SELECT * FROM pet");

	$result = mysqli_query($link, $query);

	/*if ($query){
		print "Successfully added new info <br>";
	} else {
		print "Cannot insert new info <br>";
	}*/

	$num_rows = mysqli_num_rows($result);

	print $num_rows;

?>