<?php
require('model/database.php');
require('model/GameModel.php');


$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$npass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING);
$pass2 = filter_input(INPUT_POST, "pass2", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
$action=filter_input(INPUT_POST, "login_btn", FILTER_SANITIZE_STRING);
$search=filter_input(INPUT_POST, "search", FILTER_SANITIZE_STRING);

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = 'create_read_form';
    }
}
$pass = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
if (!$pass) {
    $pass = filter_input(INPUT_GET, "password", FILTER_SANITIZE_STRING);
}
$user1 = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
if (!$user1) {
    $user1 = filter_input(INPUT_GET, "username", FILTER_SANITIZE_STRING);
}
$interr = filter_input(INPUT_GET, "interr", FILTER_SANITIZE_STRING);
switch ($action) {
    case 'inter':
        if (true) {

            include('view/login.php');
        } else {
            $error_message = 'Invalid city data. Check all fields and resubmit.';
            include('view/error.php');
        }
        break;
    case 'login':

        if ($pass) {

           $results = Login($user1 ,$pass);
            include('view/home.php');


        } else {
            $error_message = 'Invalid city data. Check all fields and resubmit.';
            include('view/error.php');
        }
        break;
    case 'out':
        if ( $email && $npass && $pass2 ) {
            $results = Sign($email,$npass,$pass2);
            include('view/home.php');

        } else {
            $error_message = 'Invalid city data. Check all fields and resubmit.';
            include('view/error.php');
        }
        break;
    case 'chart':
        if (true) {
            $results = chart();
            include('view/chart1.php');
            $error_message = 'Invalid city data. Check all fields and resubmit.';
            include('view/error.php');
        }
        break;
    default:
        include('view/homepage.php');
}