<?php
//include '/config/session_check.php';
$conn = new mysqli("mysql-zoo-arcadia-2025.alwaysdata.net", "383336", "@Admin2025", "zoo-arcadia-2025_zoo");

if($conn->connect_error) {
    die("Echec de la connexion: " .$conn->connect_error);

}

if(isset($_get['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER-SANITIZE-INT);

    $stmt = $conn->prepare("DELETE FROM animaux WHERE id=?");
    $stmt->bind_param("id", $id);
    $stmt->execute();
    $stmt->close();
}

header("location: gestion_animal.php");
exit();
$conn->close();
?>