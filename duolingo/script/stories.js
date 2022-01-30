function messageChouette(){
    var message = document.getElementById('message_bulle'); 
    message.innerHTML = "Débloque les histoires avec 10 couronnes !<br>gagne plus de couronnes pour commencer à lire des histoires en anglais !";
    message.style.fontWeight = "bold";
}

function messageDefaut(){
    var message = document.getElementById('message_bulle'); 
    message.innerHTML = "Bienvenue sur Duolingo\nrrrou rrrouuu !";
    message.style.fontWeight = "500";
}