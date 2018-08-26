<?php

	$connection = mysqli_connect('127.0.0.1', 'root', 'Zoom!#123');
	if (!$connection){
	    die("Database Connection Failed" . mysqli_error($connection));
	}
	$select_db = mysqli_select_db($connection, 'aman');
	if (!$select_db){
	    die("Database Selection Failed" . mysqli_error($connection));
	}
?>