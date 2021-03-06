<?php
error_reporting(E_ALL);

include('config/session.php');
include('config/database.php');
include('connect.php'); 
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comments App</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>

	<!-- header -->
	<header>
	<?php include('includes/header.php'); ?>
	</header>

	<!-- content -->
	<section>
	<?php

		// Error handling
		// http://yoursite.com/index.php?page=pageName
		// $url = pageName
		if (isset($_GET['page'])) {
			$url = $_GET['page'];
		} else {
			$url = false;
		}

		// After we've defined $url, check it
		if ($url) {
			// Set a variable to our filename
			$fileName = 'includes/'. $url . '.php';

			// Check if that page exists
			if (file_exists($fileName)) {
				// If it exists, include it to the page
				include($fileName);
			} else {
				// If it does not exist, show a prettier error
				include('includes/error.php');
			}

		} else {
			// if $url is false
			include('includes/default.php');
		}

	?>
	</section>

	<!-- footer -->
	<footer>
	<?php include('includes/footer.php'); ?>
	</footer>

</body>
</html>
