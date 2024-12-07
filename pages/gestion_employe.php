

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
        <div class="dashboard">
            <div class="column column-1">
                <h2>Bienvenue sur votre tableau de bord de gestion des employés</h2>
                <p>Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à l'administration du Zoo.</p>

                <div class="card-employe">
                    <div id="employees">
                        <div class="card-header bg-arc-mint-green text-light">
                            Ajouter un nouvel employé
                        </div>

                        <div class="card-body">
                            <form action="/gestionE" method="POST">
                                <div class="form-group">
                                    <label for="name">Nom de l'employé</label>
                                    <input type="text" class="form-control" id="name" name="name" value="php" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Nom d'utilisateur</label>
                                    <input type="text" class="form-control" id="username" name="username" value="php" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" name="password" value="php" required>
                                </div>
                                <div class="form-group">
                                    <label for="poste">Poste</label>
                                    <input type="text" class="form-control" id="poste" name="poste" value="php" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="php" required>
                                </div>
                                <div class="form-group">
                                    <label for="statut">Statut</label>
                                    <input type="text" class="form-control" id="statut" name="statut" value="php" required>
                        </div>
                        <div class="form-group">
                            <label for="habitat">Habitat</label>
                            <input type="text" class="form-control" id="habitat" name="habitat" value="php" required>
                                </div>

                                <div class="form-group">
                                    <label for="role">Rôle</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="admin" >Admin</option>
                                        <option value="veterinaire" >Vétérinaire</option>
                                        <option value="employe" >Employé</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="habitat">Habitat (pour les employés)</label>
                                    <select class="form-control" id="habitat" name="habitat">
                                        <option value="">Aucun</option>
                                        <option value="savane">Savane</option>
                                        <option value="jungle" >>Jungle</option>
                                        <option value="marais" >>Marais</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                        </div>

                    </div>





                </div>
            </div>
        </div>
    </div>

</section>


<section>

            <div class="row bg-arc-mint-green-light-staff py-3">

            <div class="card-list-employe mt-3">
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

</section>

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