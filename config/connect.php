<?php

// $connection = mysqli_connect(hostname, username_of_db, password, database);
$connection = mysqli_connect("127.0.0.1", "root", "root", "fb_database");

if (mysqli_connect_errno()) {
	echo "MySQL Connect has errored: " . mysqli_connect_errno();
}

session_start();

?>