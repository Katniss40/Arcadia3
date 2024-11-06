const mailInput = document.getElementById("EmailInput");
const passwordInput = document.getElementById("PasswordInput");
const btnsignin = document.getElementById("btnSignin");

btnsignin.addEventListener("click", checkCredentials);

function checkCredentials() {
    // ici il faudra appeler l'api

    if(mailInput.value == "administrateur@arcadia.fr" && passwordInput.value == "admin") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis l'administrateur"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "admin", 7);
        window.location.replace("/");
    }

    if(mailInput.value == "veterinaire@arcadia.fr" && passwordInput.value == "veto") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "veterinaire", 7);
        window.location.replace("/");
    }

    if(mailInput.value == "employe@arcadia.fr" && passwordInput.value == "empl") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis l'employe"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "employe", 7);
        window.location.replace("/");
    }

    else {
        mailInput.classList.add("is-invalid");
        passwordInput.classList.add("is-invalid");
    }
}