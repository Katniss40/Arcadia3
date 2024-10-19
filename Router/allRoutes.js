import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html", "/js/home.js"),
    new Route("/services", "services", "/pages/services.html"),
    new Route("/jungle", "jungle", "/pages/jungle/jungle.html"),
    new Route("/cameleon", "Cameleon", "/pages/jungle/cameleon.html"),
    new Route("/gorille", "Gorille", "/pages/jungle/gorille.html"),
    new Route("/jaguard", "jaguard", "/pages/jungle/jaguard.html"),
    new Route("/panthere", "Panthère", "/pages/jungle/panthere.html"),
    new Route("/perroquets", "Perroquets", "/pages/jungle/perroquets.html"),
    new Route("/singe", "Singe", "/pages/jungle/singe.html"),
    new Route("/singes", "Singes", "/pages/jungle/singes.html"),
    new Route("/tigre", "tigre", "/pages/jungle/tigre.html"),
    new Route("/toucan", "toucan", "/pages/jungle/toucan.html"),
    new Route("/marais", "marais", "/pages/marais/marais.html"),
    new Route("/castors", "castors", "/pages/marais/castors.html"),
    new Route("/flamand", "flamand", "/pages/marais/flamand.html"),
    new Route("/fourmilliers", "fourmilliers", "/pages/marais/fourmilliers.html"),
    new Route("/heron", "heron", "/pages/marais/heron.html"),
    new Route("/hibou", "hibou", "/pages/marais/hibou.html"),
    new Route("/loutre", "loutre", "/pages/marais/loutre.html"),
    new Route("/perroquet", "perroquet", "/pages/marais/perroquet.html"),
    new Route("/suricats", "suricats", "/pages/marais/suricats.html"),
    new Route("/tritons", "tritons", "/pages/marais/tritons.html"),
    new Route("/savane", "savane", "/pages/savane/savane.html"),
    new Route("/antilopes", "antilopes", "/pages/savane/antilopes.html"),
    new Route("/elephant", "elephant", "/pages/savane/elephant.html"),
    new Route("/elephants", "elephants", "/pages/savane/elephants.html"),
    new Route("/gazelle", "gazelle", "/pages/savane/gazelle.html"),
    new Route("/girafe", "girafe", "/pages/savane/girafe.html"),
    new Route("/lion", "lion", "/pages/savane/lion.html"),
    new Route("/lionceaux", "lionceaux", "/pages/savane/lionceaux.html"),
    new Route("/rhinoceros", "rhinoceros", "/pages/savane/rhinoceros.html"),
    new Route("/zebres", "zebres", "/pages/savane/zebres.html"),
    new Route("/habitats", "habitats", "/pages/habitats.html"),
    new Route("/connexion", "connexion", "/pages/connexion.html", "/js/auth/singin.js"),

];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo Arcadia";