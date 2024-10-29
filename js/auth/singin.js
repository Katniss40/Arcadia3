const InputEmail = document.getElementById("InputEmail");
const InputPassword = document.getElementById("InputPassword");
const btnSingin = document.getElementById("btnSingin");

btnSingin.addEventListener("click", checkCredentials);

function checkCredentials() {

    // Ici il faudra appeler l'API pur vérifier les credentials en BDD
     
   if(InputEmail.value == "administrateur@arcadia.fr" && InputPassword.value == "12345") {
        alert("Vous êtes connecté");

        // Il faudra récupérer le vrai token
        const token = "mise en cookie de la connexion du Zoo arcadia";
        setToken(token);
        //Placer ce token en cookie

        window.location.replace("/");
    }
    else{
        InputEmail.classList.add("is-invalid");
        InputPassword.classList.add("is-invalid");
    }
}

function isConnected() {
    if(getToken() == null || getToken == undefined) {
        return false;
    }
    else {
        return true;
    }
}



/*const togglePassword =
document.querySelector('#togglePassword');
const password = document.querySelector('#id_password');

togglePassword.addEventListener('clik', function () {
    
    const type = password.getAttribute('type') === 'password'? 'text' : 'password';
    password.setAttribute('type', type);

    if (togglePassword.scroll.match("site icone ouvert" )) {
        tooglePassword.src = "site icone fermer"
    }
    else {
        togglePassword.src = "site icone fermer"
    }

    });

   // this.textContent = type == 'password' ? 'Afficher' : 'Masquer';
//});*/