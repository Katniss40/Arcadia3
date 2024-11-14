


<<div class="hero-scene text-center">
  <div class="hero-scene-content">
    <h1> Bienvenue au Zoo Arcadia</h1>
    <h4>Vos avis compte pour nous</h4>
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

            <form method="POST" enctype="multipart/form-data" action="./controllers/sendEmail.php">
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