<?php
session_start();

// Pusher publisher library
include_once 'Pusher.php';

$pusher = new Pusher(
    'e4dfd1c45098e78facd6', // Key
    '92e4359a7a241252bfc7', // Secret
    '63717'                 // ID
);

$message = $_POST['message'];
$message = trim(filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$message = "<strong>{$_SESSION['username']}</strong> {$message}";
$pusher->trigger(
    'presence-blubber',          // Channel
	'new_message',               // Event
	array('message' => $message) // Message
);

echo json_encode(array(
	'message' => $message,
	'success' => true
));
exit();
?>
