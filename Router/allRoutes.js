import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html", "/js/home.js"),
    new Route("/services", "Services", "/pages/services.html"),
    new Route("/avis", "Avis", "/pages/avis.html"),
    new Route("/jungle", "Jungle", "/pages/jungle/jungle.html"),
    new Route("/cameleon", "Cameleons", "/pages/jungle/cameleon.html"),
    new Route("/gorille", "Gorilles", "/pages/jungle/gorille.html"),
    new Route("/jaguard", "Jaguards", "/pages/jungle/jaguard.html"),
    new Route("/panthere", "Panthères", "/pages/jungle/panthere.html"),
    new Route("/perroquets", "Perroquets", "/pages/jungle/perroquets.html"),
    new Route("/singe", "Singes", "/pages/jungle/singe.html"),
    new Route("/tigre", "Tigres", "/pages/jungle/tigre.html"),
    new Route("/anaconda", "Anacondas", "/pages/jungle/anaconda.html"),
    new Route("/toucan", "Toucans", "/pages/jungle/toucan.html"),
    new Route("/marais", "Marais", "/pages/marais/marais.html"),
    new Route("/castors", "Castors", "/pages/marais/castors.html"),
    new Route("/flamand", "Flamands", "/pages/marais/flamand.html"),
    new Route("/crocodiles", "Crocodiles", "/pages/marais/crocodiles.html"),
    new Route("/fourmilliers", "Fourmilliers", "/pages/marais/fourmilliers.html"),
    new Route("/hippopotames", "Hippopotames", "/pages/marais/hippopotames.html"),
    new Route("/loutre", "Loutres", "/pages/marais/loutre.html"),
    new Route("/oiseaux", "Oiseaux", "/pages/marais/oiseaux.html"),
    new Route("/suricats", "Suricats", "/pages/marais/suricats.html"),
    new Route("/tritons", "Tritons", "/pages/marais/tritons.html"),
    new Route("/savane", "Savane", "/pages/savane/savane.html"),
    new Route("/antilopes", "Antilopes", "/pages/savane/antilopes.html"),
    new Route("/elephant", "Elephants", "/pages/savane/elephant.html"),
    new Route("/gazelle", "Gazelles", "/pages/savane/gazelle.html"),
    new Route("/girafe", "Girafes", "/pages/savane/girafe.html"),
    new Route("/vautours", "Vautours", "/pages/savane/vautour.html"),
    new Route("/lion", "Lions", "/pages/savane/lion.html"),
    new Route("/lionceaux", "Lionceaux", "/pages/savane/lionceaux.html"),
    new Route("/rhinoceros", "Rhinoceros", "/pages/savane/rhinoceros.html"),
    new Route("/zebres", "Zebres", "/pages/savane/zebres.html"),
    new Route("/habitats", "Habitats", "/pages/habitats.html"),
    new Route("/contact", "Contact", "/pages/contact.html"),
    new Route("/connexion", "Connexion", "/pages/connexion.html", "/js/auth/signin.js"),

];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo Arcadia";