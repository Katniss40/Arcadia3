
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
    const token = "Je suis connecte a partir du JS";
    setToken(token);
    // Placer ce token en cookie

    setCookie(RoleCookieName, "admin", 7);
    window.location.replace("/");
  }
   else {
    mailInput.classList.add("is-invalid");
    passwordInput.classList.add("is-invalid");
   }
}

//connexion
function isConnected() {
    if(getToken() == null || getToken == undefined) {
        return false;
    }
    else {
       return true;
   };
};

//cookies
const tokenCookieName = "accesstoken";

function setToken(token){
    setCookie(tokenCookieName, token, 7);
};

function getToken() {
    return getCookie(tokenCookieName);
};

function setCookie(name, value, days) {
    var expires = "";
    if(days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires= " + date.toUTCString();
    };
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
};

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i < ca.length; i++) {
       var c = ca[i];
       while (c.charAt(0)==' ') c = c.substring(1,c.length);
       if(c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    };
   return null;
};

function eraseCookie(name) {
    document.cookie = name + '=; path=/; Expires=thu, 01 Jan 1970 00:00:01 GMT;';
};


const RoleCookieName = "role";

function getRole() {
    return getCookie(RoleCookieName);
}

setCookie(RoleCookieName, "admin", 7);

//deconnexion
function signout() {
    eraseCookie(tokenCookieName);
    window.location.reload();
}