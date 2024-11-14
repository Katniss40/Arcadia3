<?php
//session_start();
include 'session_check.php';

$conn = new mysqli("mysql-zoo-arcadia-2025.alwaysdata.net", "383336", "@Admin2025", "zoo-arcadia-2025_zoo");

//$servername = 'mysql-zoo-arcadia-2025.alwaysdata.net';
//$dbname = 'zoo-arcadia-2025_zoo';
//$username = '383336';
//$password =  '@Admin2025';
//$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
}

if(isset($_get['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER-SANITIZE-INT);

    $stmt = $conn->prepare("DELETE FROM animaux WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("location: gestion_animal.php");
exit();
$conn->close();
?>