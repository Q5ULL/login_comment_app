<?php

// Ternary Operations
$email = isset($_POST['email']) ? $_POST['email'] : false;
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : false;
$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : false;
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : false;
$profile_pic = isset($_POST['profile_pic']) ? $_POST['profile_pic'] : false;

// Check if our email and pwd has been set
if ($email && $pwd) {

	// Secure our database
	// encrypted twice
	$encryptedpwd = sha1(md5($pwd));
	// print out your new password - make sure it matches for the login procedure
	// print_r($pwd . " encrypted: " . $encryptedpwd . " ");
	// die();

	// Checking the database to see if the email exists
	$check_user_registered_query = "SELECT COUNT(*) FROM users WHERE email = '".$email."'";

	
	$results = mysql_query($check_user_registered_query, $link);

	// Loop through our results
	
	while($row = mysql_fetch_array($results)) {

		// Check the row "email" if it matches our POST email
		if ($row[0] != 0) {
			die("Sorry, the email <strong>" . $email ."</strong> is already registered!");
		}
	}
	
	$query = "INSERT INTO users (email, pwd, first_name, last_name, profile_pic) VALUES ('$email', '$encryptedpwd', '$first_name', '$last_name', '$profile_pic')";	
	if (mysql_query($query, $link)) {
		echo "Success! You have registered with the email: " . $email;
	} else {
		print_r($encryptedpwd);
		echo "Sorry, there was an error registering you";
	}

} else {
	echo "There was an error! email or pwd was not set";
}

?>
