<?php
	//connection to mysql server
	$link = mysqli_connect("localhost","root","", "menagerie");

	if ($link){
		print "You're connected to MySQL Server <br>";
	} else {
		print "cannot connect <br>";
	}

	$update = ("UPDATE pet SET owner='Yaya' WHERE name='Clark'");

	mysqli_query($link, $update);

	if($update){
		print "Successfully updated info";
	} else {
		print "Cannot update";
	}

?>