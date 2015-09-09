<?php
// Include my config file so I can access
// my global variables (constants)
include('config.php');

// Connect to the database server
$link = mysql_connect(MYSQL_SERVER,MYSQL_USERNAME,MYSQL_PASSWORD,MYSQL_DB);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

// Select our database
mysql_select_db("fb_database") or die(mysql_error());

?>
