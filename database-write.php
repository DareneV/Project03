<?php

	$firstname = Trim(stripslashes($_POST['firstname']));
	$lastname = Trim(stripslashes($_POST['lastname']));
	$email = Trim(stripslashes($_POST['email']));
	$telephone = Trim(stripslashes($_POST['telephone']));
	$message = Trim(stripslashes($_POST['message']));

	$dbhost = "localhost";
	$dbuser = "urcscon3_dvelama";
	$dbpass = "coffee1N/!";
	$dbname = "urcscon3_dvelama";
	
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$query = "INSERT INTO contact (first_name, last_name, email, telephone, message) VALUES ('$firstname', '$lastname', '$email', '$telephone', '$message')";

	$result = mysqli_query($connection, $query);

	$NumberOfRowsAffected = mysqli_affected_rows($connection);
	if($NumberOfRowsAffected < 1 ) {
 		die('No records were written to the database. Waaaa!');
	}

	mysqli_close($connection);

	header("Location: database-read.php");

?>

