<?php

// Check if $_SESSION is set
if (isset($_SESSION['loggedIn'])) {
	// echo("Session is set<br />");
	// the user session is set
} else {
	// echo("Session is not set");
	// The user session is not set
	$_SESSION['loggedIn'] = false;
}

// If the session loggedIn has not be set true
if ($_SESSION['loggedIn'] === false) {
	// echo "It passed our login test<br />";
	// Error handle
	if (($_POST['email'] !== "") && ($_POST['pwd'] !== "")) {
		// ternary
		$email = isset($_POST['email']) ? $_POST['email'] : false;
		$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : false;

		if ($email && $pwd) {
			// Secure our database
			// no we won't because it wont let you log in - work on this later
			$encryptedpwd = sha1(md5($pwd));
			// print_r($pwd . " encrypted: " . $encryptedpwd . " ");
			// var_dump($encryptedpwd);
			// die;

			// Check the pwd with whatever comes back from the DB
			$selectSQL = "SELECT * FROM users WHERE email = '".$email."'";
			// print_r($selectSQL);
			$results = mysql_query($selectSQL, $link);

				// We want to access row data from the database
				// based on our $selectSQL query.
				while ($row = mysql_fetch_array($results)) {

					if ($row['pwd'] === $encryptedpwd) {
						// User is verified
						$_SESSION['loggedIn'] = true;
						$_SESSION['email'] = $row['email'];
						$_SESSION['id'] = $row['id'];
						echo "You have successfully logged in.";
					} else {
						// User entered the wrong pwd
						echo 'Incorrect pwd, <a href="index.php?page=login">Try Again</a>';
					}

				}

				// echo "We are here";

		}
	} else {
		// echo "It did not pass our isset test";
		echo "You must enter your email and pwd";
	}
}



?>
