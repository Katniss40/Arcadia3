<?php
//session_start();
//include 'session_check.php';
include 'db_connexion.php';


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
}
echo "Connexion réussi!";

?>

<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <h4 class="contact"></h4>
      <div><a href="/" class="btn btn-primary">Retour a l'accueil</a></div>
    </div>
</div>


    <nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/employe">Employe Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/employe">Tableau de bord</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/editA">Gérer les animaux</a>
                        </li>                  
                        
                    </ul>
                </div>
            </div>
    </nav>


<div id="body">


<div>
    <section id="employe" class="section "> 
        <section class="mt-3 bg-arc-mint-green">

          <div class="row text-center text-light">
              <div class="col-md-12">
                  <div>
                      <div class="gazelle-titre">
                          <img src="/images/savane/Lion_savane.jpg" class="gazelle1" alt="gazelle"><h1 class="gazelle-text text-light text-center pb-2">Espace Employé</h1><img src="/images/savane/Lion_savane.jpg" class="gazelle1" alt="gazelle">
                      </div>
                      <h3>Bienvenue dans votre espace.</h3>

                      <p class="accueil welcome-gazelle">
                      celui-ci vous est réservé. </br>
                      Nous souhaitons constituer une équipe d'employés dévoués pour travailler en étroite collaboration avec nos vétérinaires. 
                      Vos compétences et votre expérience seront essentielles pour interpréter les données fournies et pour prendre des décisions éclairées, 
                      garantissant ainsi un environnement sûr et enrichissant pour nos animaux et nos visiteurs</br>
                      Cet espace vous permet aussi  de valider les avis des visiteurs du parc. 
                      Ceux ci seront visible sur notre site.</br>
                      </p>
                  </div>
              </div>    
          </div>
    
          <div class="row bg-arc-dark">
              <div class="col rect-lower-effect"></div>
          </div>
      
        </section>       



<div class="container">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreationModal" >
      Ajouter une alimentation
  </button>
  <p> Espace pour valider vos actions sur les animaux du parc</p>
</div>
<br>
<br>
<br>

<div class="avis-container">

</div>
<br>
<div class="container">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AvisModal" data-show="employe" >
    Valider un commentaire
    </button>
    <p> Espace pour valider les avis des visiteurs du parc</p>
</div>


<!-- Modal edition--> 
<div class="modal fade" id="CreationModal" tabindex="-1" aria-labelledby="CreationPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title fs-5" id="EditionPhotoModalLabel">Consommation </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-alimentation">
                <div class="mb-3">
                    <label for="NamePhotoInput" class="form-label">Animal_Id</label>
                    <input type="text" class="form-control" id="NamePhotoInput"  name="Id"> 
                </div>
                <div class="mb-3">
                    <label for="nourriture" class="form-label">Nourriture</label>
                    <input type="text" class="form-control" id="NamePhotoInput"  name="nourriture"> 
                </div>
                <div class="mb-3">
                    <label for="FermetureInput" class="form-label">Quantité </label>
                    <input type="text" class="form-control" id="NamePhotoInput"  name="quantite"> 
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary" id="btn-alimentation">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
<!-- Modal edition -->
<div class="modal fade" id="AvisModal" tabindex="-1" aria-labelledby="CreationPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title fs-5" id="EditionPhotoModalLabel">Valider </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-avis-validation">
                <div class="mb-3">
                    <label for="NamePhotoInput" class="form-label">Avis_Id</label>
                    <input type="text" class="form-control" id="IdInput"  name="Id"> 
                </div>
                <div class="mb-3">
                    <label for="nourriture" class="form-label">Visible : true ou false </label>
                    <input type="text" class="form-control" id="IsVisible"  name="IsVisible" > 
                </div>
                
                <div class="text-center">
                    <button type="button" class="btn btn-primary" id="btn-avis-validation">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

<br>
<br>
<br>

</div>


<div class="row bg-arc-mint-green-light-staff py-3">
    <header class="bg-primary text-white text-center py-3">
        <h1>Bienvenue, Employé de l'habitat !</h1>
    </header>
    <main class="container mt-4">
        <section>
            <h2 class="mb-4">Avis en attente de validation</h2>
            
        </section>
    </main>
</section>
</div>