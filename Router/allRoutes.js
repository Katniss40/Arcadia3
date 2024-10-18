import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html", "/js/home.js"),
    new Route("/services", "services", "/pages/services.html"),
    new Route("/jungle", "jungle", "/pages/jungle/jungle.html"),
    new Route("/cameleon", "jungle", "/pages/jungle/cameleon.html"),
    new Route("/gorille", "jungle", "/pages/jungle/gorille.html"),
    new Route("/jaguard", "jungle", "/pages/jungle/jaguard.html"),
    new Route("/panthere", "jungle", "/pages/jungle/panthere.html"),
    new Route("/perroquets", "jungle", "/pages/jungle/perroquets.html"),
    new Route("/singe", "jungle", "/pages/jungle/singe.html"),
    new Route("/singes", "jungle", "/pages/jungle/singes.html"),
    new Route("/tigre", "jungle", "/pages/jungle/tigre.html"),
    new Route("/toucan", "jungle", "/pages/jungle/toucan.html"),
    new Route("/marais", "marais", "/pages/marais/marais.html"),
    new Route("/castors", "marais", "/pages/marais/castors.html"),
    new Route("/flamand", "marais", "/pages/marais/flamand.html"),
    new Route("/fourmilliers", "marais", "/pages/marais/fourmilliers.html"),
    new Route("/heron", "marais", "/pages/marais/heron.html"),
    new Route("/hibou", "marais", "/pages/marais/hibou.html"),
    new Route("/loutre", "marais", "/pages/marais/loutre.html"),
    new Route("/perroquet", "marais", "/pages/marais/perroquet.html"),
    new Route("/suricats", "marais", "/pages/marais/suricats.html"),
    new Route("/tritons", "marais", "/pages/marais/tritons.html"),
    new Route("/savane", "savane", "/pages/savane/savane.html"),
    new Route("/antilopes", "savane", "/pages/savane/antilopes.html"),
    new Route("/elephant", "savane", "/pages/savane/elephant.html"),
    new Route("/elephants", "savane", "/pages/savane/elephants.html"),
    new Route("/gazelle", "savane", "/pages/savane/gazelle.html"),
    new Route("/girafe", "savane", "/pages/savane/girafe.html"),
    new Route("/lion", "savane", "/pages/savane/lion.html"),
    new Route("/lionceaux", "savane", "/pages/savane/lionceaux.html"),
    new Route("/rhinoceros", "savane", "/pages/savane/rhinoceros.html"),
    new Route("/zebres", "savane", "/pages/savane/zebres.html"),
    new Route("/habitats", "habitats", "/pages/habitats.html"),
    new Route("/connexion", "connexion", "/pages/connexion.html", "/js/auth/singin.js"),

];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo Arcadia";