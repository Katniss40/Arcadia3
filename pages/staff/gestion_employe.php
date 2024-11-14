<?php
session_start();
include 'session_check.php';

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

    $stmt = $conn->prepare("SELECT role, name, username, password, poste, email, statut, habitat FROM user WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($role, $name, $username, $password, $poste, $email, $statut, $habitat);
    $stmt->fetch();
    $stmt->close();
} else {
    die("ID de l'employé non spécifié.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_SPECIAL_CHARS);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $poste = filter_input(INPUT_POST, 'poste', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $statut = filter_input(INPUT_POST, 'statut', FILTER_SANITIZE_SPECIAL_CHARS);
    $habitat = filter_input(INPUT_POST, 'habitat', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($name && $username && $password && $poste && $email) {
        $stmt = $conn->prepare("UPDATE user SET role = ?, name = ?, username = ?, password = ?, poste = ?, email = ?, statut = ?, habitat = ? WHERE id = ?");
        $stmt->bind_param("ssssssi", $role, $name, $username, $password, $poste, $email, $satut, $habitat, $id);
        $stmt->execute();
        $stmt->close();
        header("Location: gestion_employe.php?message=updated");
        exit();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

$conn->close();
?>


<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <h4 class="contact"></h4>
      <div><a href="/" class="btn btn-primary">Espace Administrateur/employés</a></div>
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

<div id="body">

<section id="admin" class="section ">  

   
<div class="row bg-arc-mint-green-light-staff py-3">
        <div class="container mt-5">
            <h2>Gestion des employés</h2>
            <div class="card mt-3">
                <div class="card-header">
                    Ajouter un nouvel employé
                </div>
                <div class="card-body">
                    <form action="/gestionE" method="POST">
                        <div class="form-group">
                            <label for="name">Nom de l'employé</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name ?? ''); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Nom d'utilisateur</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username ?? ''); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($password ?? ''); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="poste">Poste</label>
                            <input type="text" class="form-control" id="poste" name="poste" value="<?php echo htmlspecialchars($poste ?? ''); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="statut">Statut</label>
                            <input type="text" class="form-control" id="statut" name="statut" value="<?php echo htmlspecialchars($statut ?? ''); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="habitat">Habitat</label>
                            <input type="text" class="form-control" id="habitat" name="habitat" value="<?php echo htmlspecialchars($habitat ?? ''); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="role">Rôle</label>
                            <select class="form-control" id="role" name="role" required>
                                <option value="admin" <?php echo ($role == 'admin') ? 'selected' : ''; ?>>Admin</option>
                                <option value="veterinaire" <?php echo ($role == 'veterinaire') ? 'selected' : ''; ?>>Vétérinaire</option>
                                <option value="employe" <?php echo ($role == 'employé') ? 'selected' : ''; ?>>Employé</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="habitat">Habitat (pour les employés)</label>
                            <select class="form-control" id="habitat" name="habitat">
                                <option value="">Aucun</option>
                                <option value="savane" <?php echo ($habitat == 'savane') ? 'selected' : ''; ?>>Savane</option>
                                <option value="jungle" <?php echo ($habitat == 'jungle') ? 'selected' : ''; ?>>Jungle</option>
                                <option value="marais" <?php echo ($habitat == 'marais') ? 'selected' : ''; ?>>Marais</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>

            <div class="row bg-arc-mint-green-light-staff py-3">
                <div class="container mt-5">       
                    <div class="card mt-3">
                        <div class="card-header">
                            Modifier un employé
                        </div>
                        <div class="card-body">
                            <form action="/gestionE" method="POST">
                                <div class="form-group">
                                    <label for="name">Nom de l'employé</label>
                                    <input type="text" class="form-control" id="name" name="name" <?php echo htmlspecialchars($name ?? ''); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Nom d'utilisateur</label>
                                    <input type="text" class="form-control" id="username" name="username" <?php echo htmlspecialchars($username ?? ''); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" name="password" <?php echo htmlspecialchars($password ?? ''); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="poste">Poste</label>
                                    <input type="text" class="form-control" id="poste" name="poste" <?php echo htmlspecialchars($poste ?? ''); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="position">email</label>
                                    <input type="text" class="form-control" id="email" name="email" <?php echo htmlspecialchars($email ?? ''); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="statut">statut</label>
                                    <input type="text" class="form-control" id="statut" name="statut" <?php echo htmlspecialchars($statut ?? ''); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="habitat">Habitat</label>
                                    <input type="text" class="form-control" id="habitat" name="habitat" <?php echo htmlspecialchars($habitat ?? ''); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="role">Rôle</label>
                                    <select class="form-control" id="role" name="role" required>
                                    <option value="admin" <?php echo ($role == 'admin') ? 'selected' : ''; ?>>Admin</option>
                                <option value="veterinaire" <?php echo ($role == 'veterinaire') ? 'selected' : ''; ?>>Vétérinaire</option>
                                <option value="employe" <?php echo ($role == 'employé') ? 'selected' : ''; ?>>Employé</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="habitat">Habitat (pour les employés)</label>
                                    <select class="form-control" id="habitat" name="habitat">
                                        <option value="">Aucun</option>
                                        <option value="savane" <?php echo ($habitat == 'savane') ? 'selected' : ''; ?>>Savane</option>
                                        <option value="jungle" <?php echo ($habitat == 'jungle') ? 'selected' : ''; ?>>Jungle</option>
                                        <option value="marais" <?php echo ($habitat == 'marais') ? 'selected' : ''; ?>>Marais</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                        </div>
                    </div>
            
                    
                </div>

            <div class="row bg-arc-mint-green-light-staff py-3">

            <div class="card mt-3">
                <div class="card-header">
                    Liste des employés
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom de l'employé</th>
                                <th>Nom d'utilisateur</th>
                                <th>Poste</th>
                                <th>Rôle</th>
                                <th>Habitat</th>
                                <th>Actions</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <body>
                        
                        </body>
                    </table>
                </div>
            </div>
            </div>
        </div>
</div>



</div>



    <script>
        document.getElementById('role').addEventListener('change', function() {
            var role = this.value;
            var habitatSelect = document.getElementById('habitat');
            if (role === 'vétérinaire') {
                habitatSelect.value = 'tous';
                habitatSelect.disabled = true;
            } else {
                habitatSelect.disabled = false;
            }
        });

        window.onload = function() {
            var role = document.getElementById('role').value;
            var habitatSelect = document.getElementById('habitat');
            if (role === 'vétérinaire') {
                habitatSelect.value = 'tous';
                habitatSelect.disabled = true;
            }
        };
    </script>
</div>
</section>

    </div>