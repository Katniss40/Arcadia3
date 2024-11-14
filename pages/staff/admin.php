<?php
session_start();
//include '/config/session_check.php';

$servername = 'mysql-zoo-arcadia-2025.alwaysdata.net';
$dbname = 'zoo-arcadia-2025_zoo';
$username = '383336';
$password =  '@Admin2025';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("connection failed: " .$conn->connect_error);
}

$sql = "SELECT animaux.id, animaux.nom, COALESCE(likes_animaux.likes , 0) AS likes 
    FROM animaux 
    LEFT JOIN likes_animaux ON animaux.id = likes_animaux.id";
    $result = $conn->query($sql);
?>



<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <h4 class="contact"></h4>
      <div><a href="/" class="btn btn-primary">Espace Administrateur</a></div>
    </div>
</div>

<div id="body">

<section id="admin" class="section ">
    <section class="mt-3 bg-arc-mint-green"></section>
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
    
<div class="row bg-arc-mint-green-light-staff py-3">
    <div class="dashboard">
            <div class="column column-1">
                <h2>Bienvenue sur votre tableau de bord</h2>
                    <p>Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à nos utilisateurs inscrits.</p>
            
                    <div id="employees" class="card">
                        <div class="card-header bg-arc-mint-green text-light">
                            Gestion des employés
                        </div>
                        <div class="card-body">
                            <p>Ajouter, modifier ou supprimer des employés et gérer leurs autorisations.</p>
                            <a href="/gestionE" class="btn btn-primary">Gérer les employés</a>
                        </div>
                    </div> 
                    <br><br>
            
                    <div id="services" class="card">
                        <div class="card-header bg-arc-mint-green text-light">
                            Gestion des services
                        </div>
                        <div class="card-body">
                            <p>Ajouter, modifier ou supprimer des services.</p>
                            <a href="/gestionS" class="btn btn-primary">Gérer les services</a>
                        </div>
                    </div>
                    <br><br>
                        
                    
            
                    <div id="habitats" class="card">
                        <div class="card-header bg-arc-mint-green text-light">
                            Gestion des habitats
                        </div>
                        <div class="card-body">
                            <p>Ajouter, modifier ou supprimer des habitats.</p>
                            <a href="/gestionH" class="btn btn-primary">Gérer les habitats</a>
                        </div>
                    </div>
                    <br><br>
                    
                    <div id="animals" class="card">
                        <div class="card-header bg-arc-mint-green text-light">
                            Gestion des animaux
                        </div>
                        <div class="card-body">
                            <p>Ajouter, modifier ou supprimer des animaux.</p>
                            <a href="/gestionA" class="btn btn-primary">Gérer les animaux</a>
                        </div>
                    </div>
            </div>
        </div>

        <div class="column column-2">
                    
                    
            <div class="main-content p-3 bg-arc-mint-green text-light shadow-sm">
            <h2>Chat avec l'équipe.</h2>
                <div class="chat-container p-3 bg-light text-primary rounded shadow-sm ">
                
                    <div class="chat-message sent d-flex align-items-start mb-3">
                        <div class="avatar mr-2"><i class="fas fa-user icon-bounce"></i></div>
                        <div class="chat-message sent">
                            <div class="message-content">
                                <p>Message envoyé</p>
                            </div>
                        </div>
                        </div>
                        <div class="chat-message received d-flex align-items-start mb-3">
                            <div class="avatar mr-2"><i class="fas fa-user icon-fade-in"></i></div>
                            <div class="chat-message received">
                                <div class="message-content">
                                    <p>Message reçu</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <form id="chat-form" class="chat-form d-flex">
                            <input type="text" id="chat-input" class="chat-input form-control mr-2" placeholder="Écrire un message...">
                            <button type="submit" class="btn btn-outline-light me-2">Envoyer</button>
                        </form>
                    </div>
                               
            </div>
        

        <div class="column column-3">
            <div class="main-content">
                <div class="container">
                    <h2>Nombre de Likes</h2>
                        <p>Nombre total de likes:</p>

                        <?php
                        $conn = new mysqli("mysql-zoo-arcadia-2025.alwaysdata.net", "383336", "@Admin2025", "zoo-arcadia-2025_zoo");

                        if($conn->connect_error) {
                            die("Pas de connection active: " . $conn->connect_error);                            
                        }

                        $result = $conn->query("SELECT nom, likes FROM likes_animaux ORDER BY likes DESC");

                        if ($result === false) {
                            die("Erreur de requête : " .$conn->error);                            
                        }

                        if ($result->num_rows >0) {
                            echo'<table class="likes-table">
                            <tr>
                            <th>animaux</th>
                            <th>NB de likes</th>
                            </tr>';
                            
                            $counter = 0;
                            while($row = $result->fetch_assoc()) {
                                $class ='';
                                if($counter == 0) {
                                    $class = 'multicolor-1';                               
                            } elseif($counter == 1) {
                                $class = 'multicolor-2';                                
                        }   elseif($counter == 2) {
                            $class = 'multicolor-3';                               
                        }

                        echo "<tr class='$class>
                            <td class='$class>" .htmlspecialchars($row['nom']) . "</td>
                            <td class='$class>" .htmlspecialchars($row['likes']) . "</td>
                            </tr>";

                            $counter++;                            
                        }
                        echo "</table>";
                        } else {
                        echo "Aucun like trouvé.";
                        }

                        ?>
                            
                        

                </div>
            </div>
        </div>
</div>
</section>
   
                    </div>
