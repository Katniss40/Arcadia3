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


if(username.value == "administrateur" && password.value == "admin2025") {
        
        
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis l'administrateur"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "admin", 7);
    window.location.replace("/");
}

if(username.value == "veterinaire1" && password.value == "veto1-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "veterinaire1", 7);
    window.location.replace("/");
}

if(username.value == "veterinair21" && password.value == "veto2-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "veterinaire2", 7);
    window.location.replace("/");
}

if(username.value == "veterinaire3" && password.value == "veto3-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "veterinaire3", 7);
    window.location.replace("/");
}

if(username.value == "employe1" && password.value == "empl1-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis l'employe"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "employe1", 7);
    window.location.replace("/");
}

if(username.value == "employe2" && password.value == "empl2-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis l'employe"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "employe2", 7);
    window.location.replace("/");
}

if(username.value == "employe3" && password.value == "empl3-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis l'employe"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "employe3", 7);
    window.location.replace("/");
}

else {
    username.classList.add("is-invalid");
    password.classList.add("is-invalid");
}
}