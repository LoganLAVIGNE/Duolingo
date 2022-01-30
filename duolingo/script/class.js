//Fonction affichant le menu de l'utilisateur
function afficherMenu(menu){
    switch(menu)
    {
        case "utilisateur":
            document.getElementById('infos_utilisateur').style.display="flex";
            document.getElementById('lingots').style.display="none";
            document.getElementById('series').style.display="none";
            document.getElementById('autres').style.display="none";
            break;
        case "lingots":
            document.getElementById('lingots').style.display="grid";
            document.getElementById('infos_utilisateur').style.display="none";
            document.getElementById('series').style.display="none";
            document.getElementById('autres').style.display="none";
            break;
        case "series":
            document.getElementById('series').style.display="flex";
            document.getElementById('lingots').style.display="none";
            document.getElementById('infos_utilisateur').style.display="none";
            document.getElementById('autres').style.display="none";
            break;
        case "autres":
            document.getElementById('series').style.display="none";
            document.getElementById('lingots').style.display="none";
            document.getElementById('infos_utilisateur').style.display="none";
            document.getElementById('autres').style.display="block";
            break;
    }
    
}

//Fonction masquant le menu de l'utilisateur
function masquerMenu(menu){
    document.getElementById('infos_utilisateur').style.display="none";
    switch(menu)
    {
        case "utilisateur":
            document.getElementById('infos_utilisateur').style.display="none";
            break;
        case "lingots":
            document.getElementById('lingots').style.display="none";
            break;
        case "series":
            document.getElementById('series').style.display="none";
            break;
        case "autres":
            document.getElementById('autres').style.display="none";
            break;
        default:
            document.getElementById('infos_utilisateur').style.display="none";
            document.getElementById('lingots').style.display="none";
            document.getElementById('series').style.display="none";
            document.getElementById('autres').style.display="none";
            break;
    }
}

function changerCouleurHeader(){
    var couleur = document.getElementById('input_color').value;
    document.getElementById('header').style.backgroundColor = couleur;

    document.styleSheets
    
}