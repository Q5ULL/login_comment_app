<?php

// Check if the "loggedIn" key from sessions have been set
if (isset($_SESSION['loggedIn'])) {

	// Do something if the key is set
	if ($_SESSION['loggedIn']) {
		// The user is logged in
		echo "<h1>Hello " . $_SESSION['email'] . "!</h1>";
		echo "<p>You are logged in.</p>";
		// Include our comments page from the DB
		include('comments.php');
		// Include our comments markup
		include('comments_markup.php');
	} else {
		// The user is not logged in
		echo "<h1>Hello!</h1>";
		echo "<p>You are not logged in.</p>";
	}

} else {
	// $_SESSION['loggedIn'] does NOT exist
	$_SESSION['loggedIn'] = false;
	echo "<h1>Hello!</h1>";
	echo "<p>You are not logged in.</p>";
}

?>
