


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
        <div class="container mt-5">
            <h2>Gestion des habitats</h2>
            <div class="card mt-3">
                <div class="card-header">
                    Ajouter un nouvel habitat
                </div>
                <div class="card-body">
                    <form action="manage_habitats.php" method="POST">
                        <div class="form-group">
                            <label for="habitat_name">Nom de l'habitat</label>
                            <input type="text" class="form-control" id="habitat_name" name="habitat_name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    Modifier un habitat
                </div>
                <div class="card-body">
                    <form action="manage_habitats.php" method="POST">
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

            <div class="card mt-3">
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


 </section>  
 
</div>