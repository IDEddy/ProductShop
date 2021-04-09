<?php

$accounts = array(
	'user1' => 'Password1!',
	'user2' => 'Password2@',
	'user3' => 'Password3#'
);

$user = isset($_POST['username']) ? strtolower($_POST['username']) : '';
$pass = isset($_POST['password']) ? $_POST['password'] : '';

if (isset($accounts[$user]) and $accounts[$user] == $pass) {
   
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}


