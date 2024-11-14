const tokenCookieName = "accesstoken";

function setToken(token){
    setCookie(tokenCookieName, token, 7);
}

function getToken() {
    return getCookie(tokenCookieName);
}

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires =" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length; i++) {
        var c = ca[i];
        while (c.charAT(0)== ' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT';
}




const InputEmail = document.getElementById("InputEmail");
const InputPassword = document.getElementById("InputPassword");
const btnSingin = document.getElementById("btnSingin");

btnSingin.addEventListener("click", checkCredentials);

function checkCredentials() {

    // Ici il faudra appeler l'API pur vérifier les credentials en BDD
     
   if(InputEmail.value == "administrateur@arcadia.fr" && InputPassword.value == "12345") {
        alert("Vous êtes connecté");

        // Il faudra récupérer le vrai token
        const token = "poiuytrezaqsdfghjklm";
        setToken(token);
        //Placer ce token en cookie

        setCookie(RoleCookieName, "admin", 7);
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