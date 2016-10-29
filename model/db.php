<?php
// create connection to the database
	$host="localhost"; // Host name
	$username="root"; // Mysql username ashesics_yfn5794
	$password=""; // No Mysql password C5ZQ3E6CBKTH
	$db_name="atomic_vet_clinic"; // Database name


	// check connection
	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");
?>