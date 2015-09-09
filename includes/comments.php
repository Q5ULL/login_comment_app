<h1>Comments for You</h1>

<div id="comments">
<?php

// Select all from the comments table
$sql = "SELECT comments.*, from_users.first_name AS from_user_first_name, from_users.last_name AS from_user_last_name, to_users.first_name AS to_user_first_name, to_users.last_name AS to_user_last_name 
FROM comments 
INNER JOIN users AS from_users ON comments.from_user_id=from_users.id
INNER JOIN users AS to_users ON comments.to_user_id=to_users.id
WHERE comments.to_user_id = ".$_SESSION['id'];
$results = mysql_query($sql, $link);

// From all of our results, display the data
while ($row = mysql_fetch_array($results)) {
	echo "<strong class='first_name'>" . $row['from_user_first_name'] . "</strong>: <span class='comment'>" . $row['comment'] . "</span><br />";
}


?>
</div>


<style>
#comments {
	border-radius: 5px;
	background-color: gold;
	padding: 10px;
}


.username {
	font-size: 50px;
}

.comment {
	font-size: 20px;
	font-style: italic;
}
</style>
