


<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1> Bienvenue au Zoo Arcadia</h1>
      <h4 class="contact"></h4>
      <div><a href="/" class="btn btn-primary">Espace animal</a></div>
    </div>
</div>


    <nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Vétérinaire/Employé Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" data-show="employe">
                            <a class="nav-link" href="/employe">Tableau de bord</a>
                        </li>  
                        <li class="nav-item" data-show="veterinaire">
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

<section id="editA" class="section ">
    <section class="mt-3 bg-arc-mint-green"></section>

<div class="row bg-arc-mint-green-light-staff py-3">
    <div class="container mt-5">
        <h2>Éditer un animal</h2>
        <form action="edit_animal.php?id=php" method="POST">
            <div class="form-group">
                <label for="nom">Nom de l'animal :</label>
                <input type="text" class="form-control" id="nom" name="nom" value="php" required>
            </div>
            <div class="form-group">
                <label for="habitat">Habitat :</label>
                <select class="form-control" id="habitat" name="habitat" required>
                    <option value="La Savane">La Savane</option>
                    <option value="Le Marais">Le Marais</option>
                    <option value="La Jungle">La Jungle</option>
                </select>
            </div>
            <div class="form-group">
                <label for="espece">Espèce :</label>
                <input type="text" class="form-control" id="espece" name="espece" value="php" required>
            </div>
            <div class="form-group">
                <label for="age">Âge :</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="age" name="age" value="php" required>
                    <div class="input-group-append">
                        <span class="input-group-text">ans</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="poids">Poids :</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="poids" name="poids" value="php" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kg</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="nourriture">Nourriture :</label>
                <input type="text" class="form-control" id="nourriture" name="nourriture" value="php" required>
            </div>
            <div class="form-group">
                <label for="dernier_repas">Dernier repas :</label>
                <input type="datetime-local" class="form-control" id="dernier_repas" name="dernier_repas" value="php" required>
            </div>
            <div class="form-group">
                <label for="quantite_requise">Quantité de nourriture :</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="quantite_requise" name="quantite_requise" value="php" required>
                    <select class="form-control" id="unité_nourriture" name="unité_nourriture" required>
                        <option value="grammes" >grammes</option>
                        <option value="kg" >kg</option>
                        <option value="Litre" >Litre</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="commentaires">Commentaire Santé :</label>
                <textarea class="form-control" id="commentaires" name="commentaires" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="remarques">Commentaire Privé :</label>
                <textarea class="form-control" id="remarques" name="remarques" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>

    </div>
</section>

</div>