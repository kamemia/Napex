<?php
	$dbhost="127.0.0.1";
	$dbuser="root";
	$dbpass="";
	$dbname="napex";

	$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($conn->connect_error){
		die("could not connect to the database".$conn->connect_error);
	}
?>