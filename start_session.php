<?php
session_start();

// Set up username for the session
$username = $_POST['username'];
$_SESSION['username'] = $username;

// Create an unique userid
$_SESSION['userid'] = sha1($username + time());

echo json_encode(array('success' => true));
exit();
?>