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

$sql_animaux = "SELECT * FROM animaux";
$result_animaux = $conn->query($sql_animaux);

$sql_habitats = "SELECT * FROM habitats";
$result_habitats = $conn->query($sql_habitats);
?>



<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <h4 class="contact"></h4>
      <div><a href="/" class="btn btn-primary">Retour a l'ccueil</a></div>
    </div>
</div>


    <nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/sante">Vétérinaire Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
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

<section id="veterinaire" class="section "> 

    <section class="mt-3 bg-arc-mint-green">
            
    
          <div class="row text-center text-light">
              <div class="col-md-12">
                  <div>

                      <div class="gazelle-titre">
                          <img src="/images/veto.jpg" class="gazelle1" alt="gazelle"><h1 class="gazelle-text text-light text-center pb-2">Espace veterinaire</h1><img src="/images/veto2.jpg" class="gazelle1" alt="gazelle">
                      </div>

                        <h3>Bienvenue dans votre espace. </h3>
                          <p class="accueil welcome-gazelle">
                          celui-ci vous est réservé. </br>
                          Nous avons le plaisir de vous inviter à participer à un projet passionnant au sein de notre zoo. Notre engagement : 
                          offrir les meilleurs soins possibles à nos animaux.</br>
                          Cet espace vous permet de surveiller en temps réel la santé de nos animaux, 
                          de gérer les dossiers médicaux numériques, et d'optimiser les traitements en fonction des données recueillies.</br>
                          Nous souhaitons former une équipe de vétérinaires dévoués pour travailler en collaboration, afin d'assurer une prise en charge optimale 
                          et de renforcer nos initiatives de conservation et de bien-être animal.</br>
                          </p>
                  </div>
              </div>    
          </div>
    
          <div class="row bg-arc-dark">
              <div class="col rect-lower-effect"></div>
          </div>
      
    </section>       


    <section id="yourMessage" class="section">
        <div class="row bg-arc-mint-green-light py-3">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditionHabitatModal"  style="margin-top: 10px;">Ajouter un commentaire sur un habitat</button>
      
  </button>
</div>
<div class="row bg-arc-mint-green-light py-3">
  <form class="contact-form" action="#" method="post" id="form-sante">
      <h2>Rapport</h2>
      
    <div class="form-group">
        <label for="id">Id animal</label>
        <input type="text" id="Id"  class="form-control" name="id" required></input>
    </div>
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" id="name" class="form-control" name="Nom" required></input>
    </div> 
    <div class="form-group">
      <label for="sante">Santé</label>
      <textarea type="text" class="form-control" name="sante" required></textarea>
    </div>
    <div class="form-group">
      <label for="nourriture">Nourriture conseillée</label>
      <textarea type="text" id="nourriture" class="form-control" name="nourriture" required></textarea>
    </div>
    <div class="form-group">
      <label for="visite">dernière visite</label>
      <input type="text" class="form-control" name="visite" required></input>
    </div>
    <div class="form-group">
      <label for="Remarques">Remarques</label>
      <textarea type="text" class="form-control" name="Remarques" rows="4" required></textarea>
    </div>
      
      <button type="button"  class="btn btn-primary" id="btn-rapport-sante">Envoyer</button>
  </form>
</div>

<div class="modal fade" id="EditionHabitatModal" tabindex="-1" aria-labelledby="EditionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h2 class="modal-title fs-5" id="EditionPhotoModalLabel">Modifier un Habitat </h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="form-habitat-modified">
              <div class="mb-3">
                  <label for="IdInput" class="form-label">Id de l'habitat</label>
                  <input type="int" class="form-control" id="IdInputHabitat"  name="Id"> 
              </div>
              <div class="mb-3">
                  <label for="DescriptionInput" class="form-label">Commentaire sur L'habitat</label>
                  <input type="text" class="form-control" id="NamePhotoInput"  name="Comments"> 
              </div>
              <div class="text-center">
                  <button type="button" class="btn btn-primary" id="btn_habitat_modified">Enregistrer</button>
              </div>
          </form>
      </div>
  </div>
  </div>
</div>

<div class="ali-grid">

</div>



<br>
<br>
</section> 

<div id="veterinaire_liste" >
    <div class=" bg-arc-mint-green text-light">
        <h3>bienvenue, Vétérinaire!</h3>
    </div>
<div class="row bg-arc-mint-green-light py-3">
    

    <h4>Liste des Animaux</h4>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Habitat</th>
            <th>Espèce</th>
            <th>Âge</th>
            <th>Poids</th>
            <th>Nourriture</th>
            <th>Commentaire santé</th>
            <th>Commentaire privé</th>
        </tr>

        <?php
        if($result_animaux->num_rows > 0) {
            while($row = $result_animaux->fetch_assoc()) {
                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nom']}</td>
                <td>{$row['habitat']}</td>
                <td>{$row['espece']}</td>
                <td>{$row['age']}</td>
                <td>{$row['poids']}</td>
                <td>{$row['nourriture']}</td>
                <td>{$row['commentaires']}</td>
                <td>{$row['remarques']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Aucun animal trouvé</td></tr>";
        }
        ?>
        
    </table>

    <h4>Liste des Habitats</h4>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Type d'habitat</th>
        </tr>
        <?php
        if($result_habitats->num_rows > 0) {
            while($row = $result_habitats->fetch_assoc()) {
                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nom']}</td>
                </tr>";
            }
        }else {
            echo "<tr><td colspan='5'>Aucun habitat trouvé</td></tr>";
        }
        ?>
        
    </table>
    <?php
    $conn->close();
    ?>

</div>    