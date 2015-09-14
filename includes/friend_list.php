<!-- 
Run a query to get all users - to post them on the side bar. 
Link them to their user id and pull up their page. 
PROBLEM: I dont remember how to link the 

loop through with a while
and kick yourself out of the loop

Run thorugh the user ids with a while loop, and kick yourself out of the group with the following:
	if user_id != session id, then keep going  -->
<?php

// Username should be set from our session
$id = $_SESSION['id'];

$query = "SELECT * FROM users";
$results = mysql_query($query, $link);
while ($row = mysql_fetch_array($results)) {
		echo "<strong class='first_name'>" 
		. $row['from_user_first_name'] 
		. "</strong>: <span class='comment'>" 
		. $row['comment'] . 
		// . $row['timestamp'] .
		"</span><br />";
}

?>