<?php

include 'db_connexion.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli('mysql-zoo-arcadia-2025.alwaysdata.net', '383336', '@Admin2025', 'zoo-arcadia-2025_zoo');

//$servername = 'mysql-zoo-arcadia-2025.alwaysdata.net';
//$username = '383336';
//$password =  '@Admin2025';
//$dbname = 'zoo-arcadia-2025_zoo';

if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
}


$id = $_GET['id'];
$sql = "SELECT * FROM animaux WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$animaux = $result->fetch_assoc();

$nom = $animaux['nom'];
$habitat = $animaux['habitat'];
$espece = $animaux['espece'];
$age = $animaux['age'];
$poids = $animaux['poids'];
$nourriture = $animaux['nourriture'];
$dernier_repas = $animaux['dernier_repas'];
$quantite_requise = $animaux['quantité_de_nourriture'];
$unite_nourriture = $animaux['unite_nourriture'];
$commentaires = $animaux['commentaires'];
$remarques = $animaux['remarques'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $habitat = $_POST['habitat'];
    $espece = $_POST['espece'];
    $age = $_POST['age'];
    $poids = $_POST['poids'];
    $nourriture = $_POST['nourriture'];
    $dernier_repas = $_POST['dernier_repas'];
    $quantite_requise = $_POST['quantite_requise'];
    $unite_nourriture = $_POST['unite_nourriture'];
    $commentaires = $_POST['commentaires'];
    $remarques = $_POST['remarques'];

    $sql = "UPDATE animaux SET nom = ?, habitat = ?, espece = ?, age = ?, poids = ?, nourriture = ?, dernier_repas = ?, quantite_requise = ?, unite_nourriture = ?, commentaires = ?, remarques = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssi", $nom, $habitat, $espece, $age, $poids, $nourriture, $dernier_repas, $quantite_requise, $unite_nourriture, $commentaires, $remarques, $id);

    if ($stmt->execute()) {
        header("Location: gestion_animal.php");
        exit();
    } else {
        echo "Erreur : " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>


<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <h4 class="contact"></h4>
      <div><a href="/" class="btn btn-primary">Espace animal</a></div>
    </div>
</div>


    <nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Vétérinaire/Employé Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" data-show="employe">
                            <a class="nav-link" href="/employe">Tableau de bord</a>
                        </li>  
                        <li class="nav-item" data-show="veterinaire">
                            <a class="nav-link" href="/sante">Tableau de bord</a>
                        </li>                   
                        <li class="nav-item">
                            <a class="nav-link" href="/editA">Gérer les animaux</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div id="body">

<section id="editA" class="section ">
    <section class="mt-3 bg-arc-mint-green"></section>

<div class="row bg-arc-mint-green-light-staff py-3">
    <div class="container mt-5">
        <h2>Éditer un animal</h2>
        <form action="edit_animal.php?id=<?php echo $id; ?>" method="POST">
            <div class="form-group">
                <label for="nom">Nom de l'animal :</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo htmlspecialchars($nom); ?>" required>
            </div>
            <div class="form-group">
                <label for="habitat">Habitat :</label>
                <select class="form-control" id="habitat" name="habitat" required>
                    <option value="La Savane" <?php if ($habitat == 'La Savane') echo 'selected'; ?>>La Savane</option>
                    <option value="Le Marais" <?php if ($habitat == 'Le Marais') echo 'selected'; ?>>Le Marais</option>
                    <option value="La Jungle" <?php if ($habitat == 'La Jungle') echo 'selected'; ?>>La Jungle</option>
                </select>
            </div>
            <div class="form-group">
                <label for="espece">Espèce :</label>
                <input type="text" class="form-control" id="espece" name="espece" value="<?php echo htmlspecialchars($espece); ?>" required>
            </div>
            <div class="form-group">
                <label for="age">Âge :</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="age" name="age" value="<?php echo htmlspecialchars($age); ?>" required>
                    <div class="input-group-append">
                        <span class="input-group-text">ans</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="poids">Poids :</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="poids" name="poids" value="<?php echo htmlspecialchars($poids); ?>" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kg</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="nourriture">Nourriture :</label>
                <input type="text" class="form-control" id="nourriture" name="nourriture" value="<?php echo htmlspecialchars($nourriture); ?>" required>
            </div>
            <div class="form-group">
                <label for="dernier_repas">Dernier repas :</label>
                <input type="datetime-local" class="form-control" id="dernier_repas" name="dernier_repas" value="<?php echo htmlspecialchars($dernier_repas); ?>" required>
            </div>
            <div class="form-group">
                <label for="quantite_requise">Quantité de nourriture :</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="quantite_requise" name="quantite_requise" value="<?php echo htmlspecialchars($quantite_requise); ?>" required>
                    <select class="form-control" id="unité_nourriture" name="unité_nourriture" required>
                        <option value="grammes" >grammes</option>
                        <option value="kg" >kg</option>
                        <option value="Litre" >Litre</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="commentaires">Commentaire Santé :</label>
                <textarea class="form-control" id="commentaires" name="commentaires" rows="3" required><?php echo htmlspecialchars($commentaires); ?></textarea>
            </div>
            <div class="form-group">
                <label for="remarques">Commentaire Privé :</label>
                <textarea class="form-control" id="remarques" name="remarques" rows="3" required><?php echo htmlspecialchars($remarques); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>

    </div>
</section>

</div>