<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

$email = (isset($_POST['email'])) ? $_POST['email'] : 'no name';
$computedString = "Hi, " . $email . "!";
$array = ['userName' => $email, 'computedString' => $computedString];
echo json_encode($array);
?>