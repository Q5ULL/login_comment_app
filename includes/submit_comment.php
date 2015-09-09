<?php

// Grab the comment form the markup page
$comment = $_POST['comment'];

// Username should be set from our session
$email = $_SESSION['email'];


// Do the magic:

// INSERT INTO comments (email, comment) VALUES ('dan', 'hello world!');
$sql = "INSERT INTO comments (email, comment) VALUES ('" . $email . "', '" .$comment . "')";

	if (mysql_query($sql, $link)) {
		echo "Success! Your message was posted! <a href='index.php'>Click here to go back</a>";
	} else {
		echo "Sorry, there was an error:" . mysql_error();
	}

?>
