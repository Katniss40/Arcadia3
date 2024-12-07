<?php
//session_start();
/*
include 'db_connexion.php';



$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
}
echo "Connexion réussi!";

*/
?>

<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <h4 class="contact"></h4>
      <div><a href="/" class="btn btn-primary">Espace Administrateur/habitats</a></div>
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
    <div class="dashboard">
        <div class="column column-1">
            <h2>Bienvenue sur votre tableau de bord de gestion des habitats</h2>
            <p>Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à l'administration du Zoo.</p>


            <div class="card-habitat">
            <div id="employees">
            <div class="card-header bg-arc-mint-green text-light">
                                Ajouter un nouvel habitat
                            </div>

                    <div class="card-body">
                        <form action="/gestionH" method="POST">
                            <div class="form-group">
                                <label for="habitat_name">Nom de l'habitat</label>
                                <input type="text" class="form-control" id="habitat_name" name="habitat_name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
            </div>
<br>
<br>
            <div id="employees">
            <div class="card-header bg-arc-mint-green text-light">
                        Modifier un habitat
                    </div>
                    <div class="card-body">
                    <form action="/gestionH" method="POST">
                            <div class="form-group">
                                <label for="habitat_name">Ancien nom de l'habitat</label>
                                <input type="text" class="form-control" id="habitat_old" name="habitat_name" required>
                                <label for="habitat_name">Nouveau nom de l'habitat</label>
                                <input type="text" class="form-control" id="habitat_new" name="habitat_name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </div>
                </div>

<br>
<div class="row bg-arc-mint-green-light-staff py-3">

<div class="card-list-employe mt-3">
                    <div class="card-header">
                        Liste des habitats
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom de l'habitat</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        
</div> 
</div>

 </section>  
 
</div>