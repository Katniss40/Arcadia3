export default class Route {
        constructor(url, title, pathHtml,/* pathPhp,*/ authorize, pathJS = "") {
          this.url = url;
          this.title = title;
          this.pathHtml = pathHtml;          
          this.pathJS = pathJS;
          this.authorize = authorize;
          /*this.pathPhp = pathPhp;*/
        }
    }

    /* [] -> Tout le monde peut y acceder
    ["disconnected"] -> Réserver aux utilisateurs déconnecte
    ["admin"] -> réserve  a l'administrateur
    ["admin", "veterinaire"] -> réservé a l'admin ou les vétérinaires
    ["admin", "employe"] -> réserver a l'admin ou les employés
    */