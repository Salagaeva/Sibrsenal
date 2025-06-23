<?php
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);

	session_start();

function db_connect($user = 'root', $password = '$iblis81$', $db = 'cards') {
	$link = mysqli_connect('localhost', $user, $password, $db) or die('Error connecting to database: ' . mysqli_error());
	mysqli_query($link, 'SET NAMES utf8') or die(mysqli_error());
	return $link;
}
$link = db_connect();
	
?>