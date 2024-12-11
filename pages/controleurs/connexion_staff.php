<?php
session_start();


// Connexion a la base de données
$servername = 'mysql-zoo-arcadia-2025.alwaysdata.net';
$username = '383336';
$password =  '@Admin2025';
$dbname = 'zoo-arcadia-2025_zoo';

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
} 
echo "Connexion réussi! Bienvenue dans votre espace.";


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);


    if($username && $password ) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        if ($stmt === false) {
            die("Erreur de connexion : " .$conn->error);
        }
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();

        if($user) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['habitat'] = $user['habitat'];

            if ($user['role'] === 'admin') {
                header('Location: /pages/admin.php');
                exit();
            } elseif  ($user['role'] === 'veterinaire') {
                header('Location:/pages/sante.php');
                exit();
            } elseif ( $user['role'] === 'employe') {
                header('Location:/pages/employe.php'); 
                exit();
            } else {
                echo'Rôle inconnu.';
                $conn->close(); // fermer la connexion
            } 
        } else {
            
            echo "Login et/ou mot de passe inconnu";
            header('Location:/');
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form action="connexion_staff.php" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Se connecter</button>
    </form>
    
</body>
</html>