const mailInput = document.getElementById("EmailInput");
const passwordInput = document.getElementById("PasswordInput");
const btnsignin = document.getElementById("btnSignin");

btnsignin.addEventListener("click", checkCredentials);

function checkCredentials() {
    // ici il faudra appeler l'api

    if(username.value == "administrateur" && password.value == "admin2025") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion virtuelle je suis l'administrateur"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "admin", 7);
        window.location.replace("/");
    }

    if(username.value == "veterinaire1" && password.value.value == "veto1-2025") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire de l'habitat jungle"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "veterinaire1", 7);
        window.location.replace("/");
    }

    if(username.value == "veterinaire2" && password.value.value == "veto2-2025") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire de l'habitat marais"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "veterinaire2", 7);
        window.location.replace("/");
    }

    if(username.value == "veterinaire3" && password.value.value == "veto3-2025") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire de l'habitat saane"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "veterinaire3", 7);
        window.location.replace("/");
    }

    if(username.value == "employe1" && password.value.value == "empl1-2025") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis l'employe de l'habitat jungle"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "employe1", 7);
        window.location.replace("/");
    }

    if(username.value == "employe2" && password.value.value == "empl2-2025") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis l'employe de l'habitat marais"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "employe2", 7);
        window.location.replace("/");
    }

    if(username.value == "employe3" && password.value.value == "empl3-2025") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis l'employe de l'habitat savane"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "employe3", 7);
        window.location.replace("/");
    }

    else {
        username.value.classList.add("is-invalid");
        password.value.classList.add("is-invalid");
    }
}