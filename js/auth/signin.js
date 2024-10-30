// Page connexion  creation des variables
const inputEmail = document.getElementById("inputEmail");
const inputPassword = document.getElementById("inputPassword");
const btnSignin = document.getElementById("btnSignin")

// ecoute 
inputEmail.addEventListener("keyup", validateForm);
inputPassword.addEventListener("keyup", validateForm);
btnSignin.addEventListener("click", checkCredentials);

// Fonction permettant de valider tous les formulaires
function validateForm() {
validateRequired(inputEmail);
validateRequired(inputPassword);
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

  if(inputEmail.value == "administrateur@arcadia.fr" && inputPassword.value == "admin") {
    alert("vous etes connecté");

    //Il faudra recuperer le vrai token
    const token = "iaufhiauoiuvsuvqsihfqàpzisupwxihfopsihfpqsv";
    setToken(token);
    // Placer ce token en cookie

    window.location.replace("/");
  }
   else {
    inputEmail.classList.add("is-invalid");
    inputPassword.classList.add("is-invalid");
   }
}
