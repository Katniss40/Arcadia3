<?php
//session_start();
/*include 'db_connexion.php';

if($conn->connect_error) {
  die("erreur de connexion: " .$conn->connect_error);
}
echo "Connexion réussi!";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] == 'admin') {
            header("Location: admin.php");
            exit();
        } elseif ($user['role'] == 'veto') {
            header("Location: sante.php");
            exit();
        }elseif ($user['role'] == 'employe') {
            header("Location: employe.php");
            exit();
        }else {
            echo "Réservé au staff du zoo, demandez vos identifiants à l'administration";
        }
    }
}*/

?>




<div class="hero-scene text-center">
  <div class="hero-scene-content">
    <h1> Bienvenue au Zoo Arcadia</h1>
    <h4>Connexion réservée exclusivement au personnel du zoo</h4>
    <a href="/" class="btn btn-primary">Quitter</a>
  </div>
</div>


<div id="body">

<div class="container my-md-4 py-3">

  <section id="yourMessage" class="section-connexion">
      <div class="row bg-arc-mint-green py-3">
          <h2 class="text-light"><i class="bi bi-pencil-square text-light"></i> Connexion réservée Staff</h2>

          <form method="POST" action="./verification.php">
              <div class="mb-3">
                <label for="username" class="form-label text-light">Nom d'utilisateur</label>
                <input class="form-control" type="text" id="username" name="username" placeholder="Entrer le nom d'utilisateur" required>
                <div class="invalid-feedback">
                  Le nom d'utilisateur et/ou le mot de passe ne corresponde pas aux données transmises par votre direction
                </div>
                <div id="usernameHelp" class="form-text text-light">Entrez le nom d'utilisateur communiquer par votre direction.</div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label text-light">Mot de passe</label>
                <input class="form-control" type="password" id="password" name="password" autocomplete="current-password" placeholder="Entrer le mot de passe" required>
                
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="Check1">
                <label class="form-check-label souvenir text-light" for="Check1">Se souvenir de moi</label>
              </div>
              <button type="submit" class="btn btn-light" id="submit" value='LOGIN'>Connexion</button>
<?php
/*if(isset($_GET['erreur'])) {
  $err = $GET['erreur'];
  if($err==1 || $err==2)
  echo "<p style='color:red>Utilisateur ou mot de passe incorrect</p>";
}*/
?>


          </form>
      </div>
  </section>
</div>          











