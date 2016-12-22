<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project 3</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/portfolio.jquery.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="portfolio.jquery.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald:300|Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script>
    $(document).ready(function() {
      $('.thumbs').portfolio({
        cols: 3,
        transition: 'slideDown'
      });
     });
  </script>

</head>
<body>

<div class="container">

	<header>
		<h1><a href="index.php"><img src="images/logo.png" alt="Darene's Portfolio"></a></h1>
	</header>
