// Page connexion  creation des variables
const mailInput = document.getElementById("EmailInput");
const passwordInput = document.getElementById("PasswordInput");
const btnSignin = document.getElementById("btnSignin")

// ecoute 
mailInput.addEventListener("keyup", validateForm);
passwordInput.addEventListener("keyup", validateForm);
btnSignin.addEventListener("click", checkCredentials);

// Fonction permettant de valider tous les formulaires
function validateForm() {
validateRequired(mailInput);
validateRequired(passwordInput);
}

function validateRequired(input) {
    if(input.value != '') {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
    }
    else {
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
    }
}


function checkCredentials() {
   // Info Factice  Il faudra appeler l'API (BDD)

  if(mailInput.value == "administrateur@arcadia.fr" && passwordInput.value == "admin") {
    alert("vous etes connecté");

    //Il faudra recuperer le vrai token
    const token = "iaufhiaugp,ok,ryoij^n,foiuvsuvqsihfqàpzisupwxihfopsihfpqsv";
    //setToken(token);
    // Placer ce token en cookie
    //setCookie(RoleCookieName, "admin", 7);
    window.location.replace("/");
  }
   else {
    mailInput.classList.add("is-invalid");
    passwordInput.classList.add("is-invalid");
   }
}

