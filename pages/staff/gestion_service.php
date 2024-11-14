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
?>

<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <h4 class="contact"></h4>
      <div><a href="/" class="btn btn-primary">Espace Administrateur/services</a></div>
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

<section id="admin" class="section">
    
          


    <div class="row bg-arc-mint-green-light-staff py-3">
        <div class="container mt-5">
            <h2>Gestion des services</h2>
                <div class="card mt-3">
                    <div class="card-header">
                        Ajouter un nouveau service
                    </div>
                    <div class="card-body">
                        <form action="/gestionS" method="POST">
                        <div class="form-group">
                            <label for="service_name">Nom du service</label>
                                <input type="text" class="form-control" id="service_name" name="service_name" required>
                        </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>

        <div class="card mt-3">
            <div class="card-header">
                Modifier un service
            </div>
            <div class="card-body">
                <form action="/gestionS" method="POST">
                    <div class="form-group">
                        <label for="service_name">Nom du service</label>
                            <input type="text" class="form-control" id="service_name" name="service_name" required>
                    </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Liste des services
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom du service</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>            

</section>
        
</div>        