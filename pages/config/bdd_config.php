<?php
include 'session_check.php';

$servername = 'mysql-zoo-arcadia-2025.alwaysdata.net';
$dbname = 'zoo-arcadia-2025_zoo';
$username = '383336';
$password =  '@Admin2025';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("connection failed: " .$conn->connect_error);
}
?>