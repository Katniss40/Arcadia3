import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html", "/js/home.js"),
    new Route("/services", "services", "/pages/services.html"),
    new Route("/jungle", "jungle", "/pages/jungle.html"),
    new Route("/marais", "marais", "/pages/marais.html"),
    new Route("/savane", "savane", "/pages/savane.html"),
    new Route("/habitats", "habitats", "/pages/habitats.html"),
    new Route("/connexion", "connexion", "/pages/connexion.html", "/js/auth/singin.js"),

];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo Arcadia";