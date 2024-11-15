<?php
//session_start();
/*
include 'db_connexion.php';


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
}
echo "Connexion réussi!";


$result = $conn->query("SHOW COLUMNS FROM animaux LIKE 'unite_nourriture'");
if ($result->num_rows == 0) {
    $conn->query("ALTER TABLE animaux ADD COLUMN unite_nourriture VARCHAR(255) NOT NULL");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'] ?? '';
    $habitat = $_POST['habitat'] ?? '';
    $espece = $_POST['espece'] ?? '';
    $age = $_POST['age'] ?? '';
    $poids = $_POST['poids'] ?? '';
    $nourriture = $_POST['nourriture'] ?? '';
    $unite_nourriture = $_POST['unite_nourriture'] ?? '';
    $dernier_repas = $_POST['dernier_repas'] ?? '';
    $quantite_requise = $_POST['quantite_requise'] ?? '';
    $commentaires = $_POST['commentaires'] ?? '';
    $remarques = $_POST['remarques'] ?? '';

    if (!empty($nom) && !empty($habitat) && !empty($espece) && !empty($age) && !empty($poids) && !empty($nourriture) && !empty($unite_nourriture) && !empty($dernier_repas) && !empty($quantite_requise)) {
        $sql = "INSERT INTO animaux (nom, habitat, espece, age, poids, nourriture, unite_nourriture, dernier_repas, quantite_requise, commentaires, remarques) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Erreur de préparation de la requête : " . $conn->error);
        }
        $stmt->bind_param("sssssssssss", $nom, $habitat, $espece, $age, $poids, $nourriture, $unite_nourriture, $dernier_repas, $quantite_requise, $commentaires, $remarques);

        if ($stmt->execute()) {
            echo "Nouvel enregistrement créé avec succès";
        } else {
            echo "Erreur : " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Tous les champs sont requis.";
    }
}

$sql = "SELECT * FROM animaux";
$result = $conn->query($sql);

*/
?>


<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <h4 class="contact"></h4>
      <div><a href="/" class="btn btn-primary">Espace Administrateur/animaux</a></div>
    </div>
</div>



<nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/admin">Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/gestionS">Gérer les services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gestionE">Gérer les employés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gestionA">Gérer les animaux</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gestionH">Gérer les habitats</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



<section></section>
        <div class="container mt-5 bg-arc-mint-green-light">
            <h2>Ajouter un nouvel animal</h2>
            <form action="manage_animals.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="animal_name">Nom de l'animal</label>
                            <input type="text" class="form-control" id="animal_name" name="animal_name" required>
                        </div>
                        <div class="form-group">
                            <label for="habitat_name">Habitat</label>
                            <select class="form-control" id="habitat_name" name="habitat_name" required>
                                <option value="La Savane">La Savane</option>
                                <option value="Les Marais">Les Marais</option>
                                <option value="La Jungle">La Jungle</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="species">Espèce</label>
                            <input type="text" class="form-control" id="species" name="species" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Âge</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="age" name="age" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">ans</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="health_comment">Commentaire santé</label>
                        <textarea class="form-control" id="health_comment" name="health_comment" rows="3"></textarea>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Poids</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="weight" name="weight" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="food">Nourriture</label>
                            <input type="text" class="form-control" id="food" name="food" required>
                        </div>
                        <div class="form-group">
                            <label for="last_meal">Dernier repas</label>
                            <input type="datetime-local" class="form-control" id="last_meal" name="last_meal" required>
                        </div>
                        <div class="form-group">
                            <label for="food_quantity">Quantité de nourriture</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="food_quantity" name="food_quantity" required>
                                <select class="form-control" id="unité_nourriture" name="unité_nourriture" required>
                                    <option value="grammes">grammes</option>
                                    <option value="kg">kg</option>
                                    <option value="Litre">Litre</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="private_comment">Commentaire privé</label>
                        <textarea class="form-control" id="private_comment" name="private_comment" rows="3"></textarea>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>

        <h1>Liste des Animaux</h1>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th class="small-column">Nom</th>
                    <th>Espèce</th>
                    <th class="small-column">Âge</th>
                    <th>Poids</th>
                    <th>Nourriture</th>
                    <th>Dernier Repas</th>
                    <th class="small-column">Qu</th>
                    <th>Unité</th>
                    <th>Commentaire Santé</th>
                    <th>Commentaire Privé</th>
                    <th class="small-column">Modif</th>
                </tr>
            </thead>
            <tbody>
</section>                
                <?php
/*

                $conn = new mysqli("mysql-zoo-arcadia-2025.alwaysdata.net", "383336", "@Admin2025", "zoo-arcadia-2025_zoo");

                if ($conn->connect_error) {
                    die("Échec de la connexion : " . $conn->connect_error);
                }

                $sql = "SELECT * FROM animaux";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['habitat']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['espece']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['age']) . " ans</td>";
                        echo "<td>" . htmlspecialchars($row['poids']) . " kg</td>";
                        echo "<td>" . htmlspecialchars($row['nourriture']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['unite_nourriture']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['dernier_repas']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['quantite_requise']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['commentaires']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['remarques']) . "</td>";
                        echo "<td><a href='edit_animal.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Modifier</a> ";
                        echo "<a href='supp_animal.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Supprimer</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='12'>Aucun animal trouvé.</td></tr>";
                }
                $conn->close();

                */
                ?>
            </tbody>
        </table>

        <p></p>
        <p></p>
        