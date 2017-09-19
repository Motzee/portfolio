let liensMenu = document.getElementsByClassName('lnk_menu') ;

//console.log(liensMenu) ;

for (lien of liensMenu) {
    lien.addEventListener("click", function(e) {
        e.preventDefault();

        //on regarde quel projet a été cliqué
        let selectionID = this.getAttribute('id') ;

        //on passe tous les projets en caché
        let listeArticles = document.getElementsByTagName('article') ;
        for (article of listeArticles) {
            article.className = "cache";
        }

        //on repasse le projet cliqué en visible (ou rien ne se passe si rien ne correspond)
        let ciblage = "details-"+selectionID ;
        let selection = document.getElementById(ciblage) ;
        if(selection !== null) {
            selection.className = "visible";
        }
    }) ;
  }