
<?php

// Username should be set from our session
$id = $_SESSION['id'];
echo "<h1>Your Friends:</h1>";
$query = "SELECT * FROM users";
$results = mysql_query($query, $link);
while ($row = mysql_fetch_array($results)) {
	$row_id = $row['id'];
	$row_name = $row['first_name'] . " " . $row['last_name'];
	if ($row_id != $id) {
		echo "<a class='friends' href='index.php?page=user&id=$row_id'>$row_name</a>".
		"</span><br />";
	}		
}



?>
<!-- http://localhost/login_comment_app/index.php?page=user&id=5 -->
<!-- <a href="index.php?page=user&id=<?php echo $row["id"];?>"><?php echo $row["name"];?></a>