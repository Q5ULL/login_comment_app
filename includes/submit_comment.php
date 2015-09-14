<?php


// Grab the comment
$comment = $_POST['comment'];
$to_user_id = $_POST['to_user_id'];
// Username should be set from our session
$id = $_SESSION['id'];


// Do the magic:

// INSERT INTO comments (email, comment) VALUES ('dan', 'hello world!');
$sql = "INSERT INTO comments (comment, from_user_id, to_user_id, timestamp) VALUES ('" .$comment . "', $id, $to_user_id, CURRENT_TIMESTAMP)";

if (mysql_query($sql, $link)) {
	echo "Success! Your message was posted! <a href='index.php'>Go Back to Homepage</a>";
} else {
	echo "Sorry, there was an error:" . mysql_error();
}

?>
