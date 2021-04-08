function afficherExpForm(){
    var w = document.getElementById("formForm");
    var x = document.getElementById("formExp");
    var y = document.getElementById("ajoutForm");
    var z = document.getElementById("ajoutExp");

    // Boutons
    y.style.visibility="visible";
    z.style.visibility='hidden';
    
    // Formulaires
    w.style.visibility = "hidden";
    x.style.visibility="visible";
}

function afficherFormForm(){
    var w = document.getElementById("formForm");
    var x = document.getElementById("formExp");
    var y = document.getElementById("ajoutForm");
    var z = document.getElementById("ajoutExp");

    // Boutons
    y.style.visibility="hidden";
    z.style.visibility='visible';
    
    // Formulaires
    w.style.visibility = "visible";
    x.style.visibility="hidden";
}

function ajouterForm(){
    var w = document.getElementById("formForm");
    var x = document.getElementById("formExp");
    var y = document.getElementById("ajoutForm");
    var z = document.getElementById("ajoutExp");

    // Boutons
    y.style.visibility="visible";
    z.style.visibility='visible';
    
    // Formulaires
    w.style.visibility = "hidden";
    x.style.visibility="hidden";

}

function ajouterExp(){
    var w = document.getElementById("formForm");
    var x = document.getElementById("formExp");
    var y = document.getElementById("ajoutForm");
    var z = document.getElementById("ajoutExp");

    // Boutons
    y.style.visibility="visible";
    z.style.visibility='visible';
    
    // Formulaires
    w.style.visibility = "hidden";
    x.style.visibility="hidden";


}

function afficherFormInteret(){
    var x = document.getElementById("formInteret");
    var y = document.getElementById("boutonInteret");
    
    // Boutons
    y.style.visibility="hidden";
    
    // Formulaires
    x.style.visibility = "visible";
    
}

function ajouterInteret(){
    var x = document.getElementById("formInteret");
    var y = document.getElementById("boutonInteret");
    
    // Boutons
    y.style.visibility="visible";
    
    // Formulaires
    x.style.visibility = "hidden";
}