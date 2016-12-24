<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "urcscon3_dvelama";
	$dbpass = "coffee1N/!";
	$dbname = "urcscon3_dvelama";
		
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * FROM contact ";


	$result = mysqli_query($connection, $query);
	
?>

<!doctype html>
<html>
<head>
	<title>Contact Form Submissions</title>
</head>
<body>

	<h1>Contacts</h1>

	<table border>

	<tr>
		<th>
			Id
		</th>
		<th>
			First Name
		</th>
		<th>
			Last Name
		</th>
		<th>
			Email
		</th>
		<th>
			Telephone
		</th>
		<th>
			Message
		</th>
	</tr>

<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

		<tr>
			<td><?php echo $pages["id"]; ?></td>
			<td><?php echo $pages["first_name"]; ?></td>
			<td><?php echo $pages["last_name"]; ?></td>
			<td><?php echo $pages["email"]; ?></td>
			<td><?php echo $pages["telephone"]; ?></td>
			<td><?php echo $pages["message"]; ?></td>
		</tr>

<?php } ?>

	</table>

	<br>
	<a href=".">Back to the Home Page</a>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>