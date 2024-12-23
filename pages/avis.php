<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="/scss/main.css"/>
    <script src="https://kit.fontawesome.com/61c7fa05f4.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/images/logo3.png" type="image/gif">
    <title>Zoo-Arcadia - Avis</title>
    
</head>
<body>
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg bg-primary fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Zoo Arcadia</a>
          <img src="/images/logo3.png" alt="Logo" width="70" height="60" class="d-inline-block align-text-top">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav nav-underline mx-auto">
              <li class="nav-item ">
                <a class="nav-link text-light" aria-current="page" href="/">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/pages/services.php">Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="/pages/habitats.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Habitats
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pages/jungle/jungle.html">La Jungle de Mowgli</a></li>
                  <li><a class="dropdown-item" href="/pages/marais/marais.html">Le Marais de Shrek</a></li>
                  <li><a class="dropdown-item" href="/pages/savane/savane.html">La Savane De Simba</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/pages/habitats.html">Tous les Habitats</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/pages/contact.html">Contact</a>
              </li>              
            </ul>
            
            <li class="nav-item" data-show="admin employe">
              <a class="btn btn-outline-light me-2" href="/pages/employe.php">Employé</a>
            </li>
            <li class="nav-item" data-show="admin veterinaire">
              <a class="btn btn-outline-light me-2" href="/pages/sante.php">Vétérinaire</a>
            </li>
            <li class="nav-item" data-show="admin">
              <a class="btn btn-outline-light me-2" href="/pages/admin.php">Administrateur</a>
            </li>

            <li class="nav-item" data-show="connected">
              <a class="btn btn-outline-light me-2" id="logoutBtn">Deconnexion</a>
            </li>

            <li class="nav-item" data-show="disconnected">
              <a class="btn connexion btn-outline-light me-2" href="/pages/connexion.php" id="loginBtn">Connexion staff</a>
            </li>
          
            <!--<a type="button" class="btn connexion btn-outline-light me-2" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" href="/connexion">Connexion</a>
            <button class="btn btn-outline-light" id="btnSignout">Deconnexion</button>-->
        </div>
        </div>
      </nav>
    </header>
    
    <main id="main-page">
<br>
<br>
<br>


<div class="hero-scene text-center">
  <div class="hero-scene-content">
    <h1> Bienvenue au Zoo Arcadia</h1>
    <h4>Connexion réservée exclusivement au personnel du zoo</h4>
    <a href="/" class="btn btn-primary">Quitter</a>
  </div>
</div>

<div id="body">

<section id="avis_message" class="section">  
    

    
        <section class="mt-3 ">
            
        
            <div class="row text-center text-light">
                <div class="col-md-12 bg-arc-mint-green">
                    <div>
                        <div class="gazelle-titre">
                            <img src="/images/savane/Lion_savane.jpg" class="gazelle1" alt="gazelle"><h1 class="gazelle-text text-light text-center pb-2">Ajouter un avis</h1><img src="/images/savane/Lion_savane.jpg" class="gazelle1" alt="gazelle">
                        </div>
                            <p class="accueil welcome-gazelle">
                                Vos avis nous intéressent : notre équipe consulte régulièrement vos messages afin de nous améliorer.<br> 
                            </p>
                    </div>
                </div>    
            </div>
      
            <div class="row bg-arc-dark">
                <div class="col rect-lower-effect"></div>
            </div>
        
        </section>       
    
</section>
    
<section id="yourMessage" class="section">
        <div class="row bg-arc-mint-green-light py-3">
            <h2 class="text-black"><i class="bi bi-pencil-square text-black"></i> Votre message</h2>

            <form method="POST" enctype="multipart/form-data" action="#">
                <div class="mb-3">
                    <input type="hidden" name="csrf_token" value="6f9b48310e9b0d6d73d056f74a1dfb975e7b6bbb10b3aa09fa1deb9a0dda46be">
                    <label for="contactTitle" class="form-label text-black">Pseudo :</label>
                    <input required type="text" class="form-control " id="contactTitle" name="contactTitle" placeholder="Votre pseudo">
                </div>
                <div class="mb-3">
                    <label for="contactMessage" class="form-label text-black">Avis :</label>
                    <textarea class="form-control text-black" id="contactMessage" name="contactMessage" rows="5">Tapez votre message ici.</textarea>
                </div>
                                
                <input class="btn btn-primary text-light" name="ContactForm" type="submit" value="Envoyer ce message"></input>

            </form>
        </div>
</section>    
                   
<section id="avis_message" class="section ">                              
                                                    
    <div class="carousel-item ">
        <div class="card">
            <div class="card-header bg-arc-primary text-light d-flex justify-content-between align-items-center">
                <i class="bi bi-person-circle"></i>
                    <span>@Antoine123</span>
            </div>
            <div class="card-body">
                <p class="card-text">"Je recommande vivement ce zoo ! La variété d'espèces est impressionnante."</p>
            </div>
        </div>
    </div>
          
    <div class="row bg-arc-dark">
        <div class="col rect-lower-effect"></div>
    </div>
</section>   

<section id="carrousel_avis" class="mt-md-2">

<div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card border-success mb-3" style="max-width: 40rem;">
                <div class="card-header">@Cmoi</div>
                    <div class="card-body text-success">
                        <h5 class="card-title">Nous reviendrons</h5>
                            <p class="card-text">"C&#039;était vraiment fun et les animaux ont l&#039;air heureux dans ce zoo. Nous y retournerons si nous passons dans le coin. Bravo aux équipes.</p>
                    </div>
                <div class="card-footer border-success">05/09/2024</div>
            </div>
        </div>    

        <div class="carousel-item">
            <div class="card border-success mb-3" style="max-width: 40rem;">
                <div class="card-header">@SimonC</div>
                    <div class="card-body text-success">
                        <h5 class="card-title">Experiance enrichissante</h5>
                            <p class="card-text">"Je suis venu plusieurs fois et je ne m'en lasse pas. Toujours une expérience enrichissante."</p>
                    </div>
                <div class="card-footer border-success">15/08/2024</div>
            </div>
        </div>
    
        <div class="carousel-item">
            <div class="card border-success mb-3" style="max-width: 40rem;">
                <div class="card-header">@Antoine123</div>
                    <div class="card-body text-success">
                        <h5 class="card-title">Je recommande</h5>
                            <p class="card-text">"Je recommande vivement ce zoo ! La variété d'espèces est impressionnante."</p>
                    </div>
                <div class="card-footer border-success">07/05/2024</div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card border-success mb-3" style="max-width: 40rem;">
                <div class="card-header">@Cmoi</div>
                    <div class="card-body text-success">
                        <h5 class="card-title">Superbe</h5>
                            <p class="card-text">"C&#039;était une journée exceptionnelle dans un milieu naturel et respectueux de l&#039;environnement. Nous reviendrons pour sûr !"</p>
                    </div>
                <div class="card-footer border-success">06/11/2024</div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card border-success mb-3" style="max-width: 40rem;">
                <div class="card-header">@Cmoi</div>
                    <div class="card-body text-success">
                        <h5 class="card-title">Superbe</h5>
                            <p class="card-text">"C&#039;était une journée exceptionnelle dans un milieu naturel et respectueux de l&#039;environnement. Nous reviendrons pour sûr !"</p>
                    </div>
                <div class="card-footer border-success">06/11/2024</div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card border-success mb-3" style="max-width: 40rem;">
                <div class="card-header">@Marc36</div>
                    <div class="card-body text-success">
                        <h5 class="card-title">Journee incroyable</h5>
                            <p class="card-text">"Quelle journée incroyable au zoo ! Les animaux étaient si fascinants à observer, et j'ai tellement appris sur la diversité de notre belle planète. C'était une expérience qui a vraiment égayé ma journée et renforcé mon amour pour la nature. #Gratitude #BelleJournée"</p>
                    </div>
                    <div class="card-footer border-success">01/10/2024</div>
            </div>        
        </div>
    </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</section>

</div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.rating-star');
            const noteInput = document.getElementById('note');

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const rating = this.getAttribute('data-rating');
                    noteInput.value = rating;

                    stars.forEach(s => s.classList.remove('selected'));
                    this.classList.add('selected');
                    for (let i = 0; i < rating; i++) {
                        stars[i].classList.add('selected');
                    }
                });
            });
        });

</script>

</main>


    <div class="footer-clean">
      <footer>
          <div class="container-footer">
              <div class="row-footer justify-content-center">
                  <div class="col-sm-4 item">
                    <h5 class="text-black">Nos horaires</h5>
                    <p class="p-footer">Tous les jours du lundi au vendredi: de 10h à 18h</br>
                        Weekend, Vacances et jours fériés: de 9h à 18h</p>
                  </div>
                  <div class="col-sm-4 item">
                    <h5 class="text-black">Où nous trouver</h5>
                    <p class="p-footer"> 497, route des sables 35050 Broceliandes</br>
                     Tel : 06.05.04.03.02
                     </p>
                  </div>
                  <div class="col-sm-4 item">
                    <a class="text-light" href="mentions_legales.docx">Mentions légale</a>
                    <h5>Zoo Arcadia © 2025</h5>
                    
                    <!--<img alt="Deployed with FTP Deploy Action" src="https://img.shields.io/badge/Deployed With-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=0077b6">(https://github.com/SamKirkland/FTP-Deploy-Action)-->                 
                  </div>
                  
              </div>
          </div>
      </footer>
    </div>

  </div>
  <script src="/js/auth/signin.js"></script>
    <script src="/js/index.js"></script>
    
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>