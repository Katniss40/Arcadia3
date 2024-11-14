<?php
session_start();
include 'db_config.php';
include 'session_check.php';

if (isset($_get['id'])) {
    $id = $_get['id'];

    $stmt = $conn->prepare("DELETE * FROM employe WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: gestion_employe.php? message = success');
    }else {
        header('Location: gestion_employe.php? message = error');
    }

    $stmt->close();
}else {
    header('Location: gestion_employe.php');
}

$db->close();
?>

$servername = 'mysql-zoo-arcadia-2025.alwaysdata.net';
$dbname = 'zoo-arcadia-2025_zoo';
$username = '383336';
$password =  '@Admin2025';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $db->prepare("DELETE FROM employe WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: gestion_employe.php?message=success");
    } else {
        header("Location: gestion_employe.php?message=error");
    }

    $stmt->close();
} else {
    header("Location: gestion_employe.php");
}
$db->close();
?>