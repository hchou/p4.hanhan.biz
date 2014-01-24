<?php
session_start();

include_once 'Pusher.php';

$socket_id = $_POST['socket_id'];
$channel_name = $_POST['channel_name'];

$pusher = new Pusher(
    'e4dfd1c45098e78facd6', // Key
    '92e4359a7a241252bfc7', // Secret
    '63717'                 // ID
);

$presence_data = array(
	'username' => $_SESSION['username']
);

echo $pusher->presence_auth(
	$channel_name, 
	$socket_id,
	$_SESSION['userid'],
	$presence_data
);
exit();
?>
