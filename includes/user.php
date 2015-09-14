<?php
// show any user

// get the user id from the GET variable
$user_id = $_GET['id'];

// print_r("looking at detils of " . $user_id);

// look up the user frpm the database by that id
$query = "SELECT * FROM users WHERE id = $user_id";
$results = mysql_query($query, $link);
	// Loop through our results

while($row = mysql_fetch_array($results)) {
	// Check the "]row "email" if it matches our POST emai
	echo "<h1>". $row["first_name"]."</h1>";
	echo "<h1>". $row["last_name"]."</h1>";
}

include("comment_list.php"); 
showCommentList($user_id);
include("friend_list.php");
?>

<?php include('comments_markup.php'); ?>