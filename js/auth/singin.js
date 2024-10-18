const InputEmail = document.getElementById("InputEmail");
const InputPassword = document.getElementById("InputPassword");
const btnSingin = document.getElementById("btnSingin");

btnSingin.addEventListener("click", checkCredentials);

function checkCredentials() {

    // Ici il faudra appeler l'API pur vérifier les credentials en BDD
     
    if(InputEmail.value == "bourdeloux.corinne@orange.fr" && InputPassword.value == "12345") {
        alert("Vous êtes connecté");

        // Il faudra récupérer le vrai token
        const token = "svlsijdmziqefhiqshvmxu";

        //Placer ce token en cookie

        window.location.replace("/");
    }
    else{
        InputEmail.classList.add("is-invalid");
        InputPassword.classList.add("is-invalid");
    }
}