<?php
$dsn = 'mysql:host=localhost;dbname=video-games';
$username = 'root';
try {
    $db = mysqli_connect('localhost', 'root', '', 'video-games');
} catch (PDOException $e) {
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    include('view/error.php');
    exit();
}
