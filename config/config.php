<?php 
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'sportfit');
	$conn = new Mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(Mysqli_errno());
 ?>