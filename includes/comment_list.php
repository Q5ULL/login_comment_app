<?php

function showCommentList($to_user_id) { ?>

	<div id="comments">
	<?php

// you need to define the $link globally, because this is a function
	global $link;

	// Select all from the comments table
	$sql = "SELECT comments.*, 
	from_users.first_name AS from_user_first_name, 
	from_users.last_name AS from_user_last_name, 
	from_users.id AS from_user_id,
	to_users.first_name AS to_user_first_name, 
	to_users.last_name AS to_user_last_name,
	to_users.id AS to_users_id
	FROM comments 
	INNER JOIN users AS from_users ON comments.from_user_id=from_users.id
	INNER JOIN users AS to_users ON comments.to_user_id=to_users.id
	WHERE comments.to_user_id = ".$to_user_id;
	// echo $sql;
	$results = mysql_query($sql, $link);

	// From all of our results, display the data
	while ($row = mysql_fetch_array($results)) {
		echo "<strong class='first_name'>" . $row['from_user_first_name'] . "</strong>: <span class='comment'>" . $row['comment'] . "</span><br />";
	}


	?>
	</div>


<?php } ?>