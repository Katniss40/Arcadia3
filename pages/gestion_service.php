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

    <section id="admin" class="section ">

        <div class="row bg-arc-mint-green-light-staff py-3">
            <div class="dashboard">
                <div class="column column-1">
                    <h2>Bienvenue sur votre tableau de bord de gestion des services</h2>
                    <p>Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à l'administration du Zoo.</p>

                    <div class="card-services">
                        <div id="employees">
                            <div class="card-header bg-arc-mint-green text-light">
                                Ajouter un nouveau services
                            </div>

                            <div class="card-body">
                                <form action="/gestionS" method="POST">
                                    <div class="form-group">
                                        <label for="name">Nom du service</label>
                                        <input type="text" class="form-control" id="service_name" name="service_name"  required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </form>
                            </div>
                        </div>
                          <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>

        <div class="row bg-arc-mint-green-light-staff py-3">

            <div class="card-list-employe mt-3">
                <div class="card-header bg-arc-mint-green text-light">
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


