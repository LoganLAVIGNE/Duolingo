//On créé notre questionnaire en reprenant la structure du JSON
let questionnaire = {
    langue: "Anglais",
    questions: ["Bonjour",
        "Comment allez-vous",
        "Il fait beau aujourd'hui",
        "Je m'appelle John",
        "Au revoir",
        "J'ai un chien"],
    choix: [
        //Q1
        ["Hello",
        "Goodbye",
        "How are you",
        "Thanks you"],
        //Q2
        ["How is the weather today",
        "How are you",
        "How old are you",
        "What is your name"],
        //Q3
        ["I'm fine",
        "I don't have a car",
        "Today the weather is good",
        "I am in the train right now"],
        //Q4
        ["I have two sisters",
        "My dad works 2 hours away from home",
        "She wasn't there yesterday",
        "My name is John"],
        //Q5
        ["See you later",
        "Goodbye",
        "Goodnight",
        "Good evening"],
        //Q6
        ["I don't have any pets",
        "I have a cat",
        "I have a dog",
        "I speak english"]
    ],
    reponses: [0,1,2,3,1,2],
    commentaires: ["Ouille... Pas de panique, à force de persévérance vous parviendrez à maîtriser cette langue !",
        "Les bases sont là, ne vous découragez pas !",
        "Bon travail, vous commencez à maîtriser la langue !",
        "Excellent, vous parlez désormais cette langue à la perfection !"]
};

/*
let questionnaire = {
    langue: "ma propre langue",
    questions: ["Q1","Q2","Q3","Q4"],
    choix: [
        //Q1
        ["R1","R2","R3","R4"],
        //Q2
        ["R1","R2"],
        //Q3
        ["R1","R2","R3","R4","R5","R6"],
        //Q4
        ["R1","R2","R3","R4"]
    ],
    reponses: [0,1,2,3],
    commentaires: ["Ouille... Pas de panique, à force de persévérance vous parviendrez à maîtriser cette langue !",
        "Les bases sont là, ne vous découragez pas !",
        "Bon travail, vous commencez à maîtriser la langue !",
        "Excellent, vous parlez désormais cette langue à la perfection !"]
};
*/

//On initialise un tableau de réponses
let reponses=[];

//Fonction faisant fonctionner le questionnaire
function afficherQuestionnaire(num){
    //S'il ne s'agit pas de la première question
    if(num > 0) 
    {
        //On sauvegarde les données précedentes
        for(var i=0; i<questionnaire.choix[num-1].length; i++)
        {
            var temp_i = i+1;
            //Si on a coché la réponse
            var choix = document.getElementById('r'+temp_i); 
            if(choix.checked == true)
            {
                //On ajoute le résultat aux réponses
                reponses[num-1] = choix.value;
                console.log(reponses);
            }
        }
        //Si on n'a choisi aucune réponse
        if(reponses[num-1] == null)
        {
            //On affiche le message d'erreur
            document.getElementById('erreur_cocher').style.display = "block";
            return false;
        }
    }

    //On augmente la barre de progression 
    var barre_progression = document.getElementById('progression_utilisateur');
    //On calcule la largeur adéquat pour indiquer l'avancement actuel en se basant sur le principe du produit en croix
    var width = ((num+1)*100)/questionnaire.questions.length+"%";
    console.log(width);
    //On change la largeur de la barre de progression
    barre_progression.style.width = width; 

    //On supprime le potentiel message d'erreur en cas de non sélection de réponses
    document.getElementById('erreur_cocher').style.display = "none";
    //On supprime les anciens choix pour laisser de la place aux nouveaux
    var choix = document.getElementById('div_reponses'); 
    while(choix.firstChild)
    {
        choix.removeChild(choix.lastChild);
    }

    //On affiche le numéro de la question
    document.getElementById('numero_question').innerHTML = num+1;
    //On informe le nombre de questions
    document.getElementById('total_question').innerHTML = questionnaire.questions.length;
    //On précise la question
    document.getElementById('question').innerHTML = questionnaire.questions[num];
    document.getElementById('langue').innerHTML = questionnaire.langue;

    //Pour chaque choix possible
    for(var i=0; i<questionnaire.choix[num].length; i++)
    {
        var temp_i = i+1;
        //On créé le label
        var label = document.createElement('label');
        label.setAttribute("for", "r"+temp_i);
        //On créé l'input
        var input = document.createElement('input');
        input.setAttribute("type", "radio");
        input.setAttribute("id", "r"+temp_i);
        input.setAttribute("name", "reponses");
        input.setAttribute("value", questionnaire.choix[num][i]);
        //On créé le choix
        var span = document.createElement('span');
        span.innerHTML = " "+questionnaire.choix[num][i];
        //On append les éléments
        label.appendChild(input);
        label.appendChild(span);
        //On affiche la question
        document.getElementById('div_reponses').appendChild(label);
    }

    
    //S'il s'agit de la dernière question
    if(num == questionnaire.questions.length-1)
    {
        //On paramètre le bouton afin qu'il affiche les résultats
        var nouveau_num = num+1
        document.getElementById('bouton_suivant').setAttribute('onclick', 'afficherResultats('+nouveau_num+')')
        document.getElementById('bouton_suivant').innerHTML = "Voir mes résultats";
    }
    //S'il ne s'agit pas de la dernière question on met à jour le bouton
    else
    {
        var nouveau_num = num+1
        document.getElementById('bouton_suivant').setAttribute('onclick', 'afficherQuestionnaire('+nouveau_num+')');
    }
}
  

//Fonction affichant les résultats du test
function afficherResultats(num){
    //On sauvegarde les données précedentes
    for(var i=0; i<questionnaire.choix[num-1].length; i++)
    {
        var temp_i = i+1;
        //Si on a coché la réponse
        var choix = document.getElementById('r'+temp_i); 
        if(choix.checked == true)
        {
            //On ajoute le résultat aux réponses
            reponses[num-1] = choix.value;
            console.log(reponses);
        }
    }
    //Si on n'a choisi aucune réponse
    if(reponses[num-1] == null)
    {
        //On affiche le message d'erreur
        document.getElementById('erreur_cocher').style.display = "block";
        return false;
    }

    //Le questionnaire étant fini, on supprime tous les éléments du main
    var main = document.getElementById('main'); 
    while(main.firstChild)
    {
        main.removeChild(main.lastChild);
    }
    //On affiche les résultats

    //On affiche la note
    var div = document.createElement('div');
    div.setAttribute('id', 'note');
    //On calcule la note
    var note = 0;
    //Pour chaque question
    for(var i=0; i<questionnaire.questions.length; i++)
    {
        //Si l'utilisateur à la bonne réponse
        if(reponses[i] == questionnaire.choix[i][questionnaire.reponses[i]])
        {
            //Il gagne un point
            note++;
            console.log(note);
        }
    }
    //On affiche la note
    var h = document.createElement('h1');
    h.innerHTML = note+"/"+questionnaire.questions.length;
    //On créé le gif d'appréciation
    var gif = document.createElement('img');
    //On convertit la note de l'utilisateur en pourcentage en utilisant le principe du produit en croix
    note = (note*100)/questionnaire.questions.length;
    console.log("Note en % : "+note);
    //On créé le paragraphe du commentaire
    var p = document.createElement('p');
    //On affiche le commentaire adéquat 
    if(note <= 35)
    {
        p.innerHTML = questionnaire.commentaires[0];
        //On affiche le gif adéquat
        gif.setAttribute('src', 'images/chouette_pleure.gif');
        gif.setAttribute('alt', 'Chouette en pleures');
    }
    else if(note > 35 && note <= 60)
    {
        p.innerHTML = questionnaire.commentaires[1];
        //On affiche le gif adéquat
        gif.setAttribute('src', 'images/chouette_danse.gif');
        gif.setAttribute('alt', 'Chouette dansante');
    }
    else if(note > 60 && note < 100)
    {
        p.innerHTML = questionnaire.commentaires[2];
        //On affiche le gif adéquat
        gif.setAttribute('src', 'images/chouette_contente.gif');
        gif.setAttribute('alt', 'Chouette contente');
    }
    else if(note == 100)
    {
        p.innerHTML = questionnaire.commentaires[3];
        //On affiche le gif adéquat
        gif.setAttribute('src', 'images/chouette_muscles.gif');
        gif.setAttribute('alt', 'Chouette musclées');
    }

    //On append les éléments à la div
    div.appendChild(h);
    div.appendChild(gif);
    div.appendChild(p);
    var main = document.getElementById('main');
    main.appendChild(div);

    //Pour chaque réponses de l'utilisateur
    for(var i=0; i<reponses.length; i++)
    {
        //On récupère la question
        var question = questionnaire.questions[i];
        //On récupère la réponse de l'utilisateur
        var reponse_utilisateur = reponses[i];
        //On récupère la bonne réponse attendue
        var num_bonne_reponse = questionnaire.reponses[i];

        var temp_i = i+1;
        //On créé la div de la question
        var div = document.createElement('div');
        //On créé le h3
        var h = document.createElement('h2');
        h.innerHTML = "Question n°"+temp_i+" sur "+questionnaire.questions.length;
        //On créé la question
        var p1 = document.createElement('p');
        p1.innerHTML = "Comment dit-on ";
        var span = document.createElement('span');
        span.setAttribute('class', 'bold');
        span.innerHTML = question;
        p1.appendChild(span);
        p1.innerHTML += " en "+questionnaire.langue+" ?";
        //On créé la réponse de l'utilisateur
        var p2 = document.createElement('p');
        p2.innerHTML = "Votre réponse était ";//+reponses[i];
        var span = document.createElement('span');
        span.setAttribute('class', 'bold');
        span.innerHTML = reponse_utilisateur;
        p2.appendChild(span);
        //On créé la bonne réponse attendue
        var p3 = document.createElement('p');
        //On créé la réponse attendue
        var span = document.createElement('span');
        //Si l'utilisateur a trouvé la bonne réponse
        if(reponses[i] == questionnaire.choix[i][num_bonne_reponse])
        {
            //La div de la question aura un fond vert
            div.setAttribute('class', 'div_reponse bonne_reponse');
            //Le message sera vert
            span.setAttribute('class', 'vert');
            span.innerHTML = "C'est la bonne réponse !";
        }
        //Si l'utilisateur n'a pas trouvé la bonne réponse
        if(reponses[i] != questionnaire.choix[i][num_bonne_reponse])
        {
            //La div de la question aura un fond vert
            div.setAttribute('class', 'div_reponse mauvaise_reponse');
            //Le message sera rouge
            span.setAttribute('class', 'rouge');
            span.innerHTML = "Mauvaise réponse ! La bonne réponse était ";
            var span2 = document.createElement('span');
            span2.setAttribute('class', 'bold');
            span2.innerHTML = questionnaire.choix[i][num_bonne_reponse]; 
            span.appendChild(span2);
        }
        p3.appendChild(span);
        //On append les éléments créés à la div
        div.appendChild(h);
        div.appendChild(p1);
        div.appendChild(p2);
        div.appendChild(p3);
        //On append la div au main
        var main = document.getElementById('main');
        main.appendChild(div);
    }
    //On créé le boutton de recommencement du test
    var bouton = document.createElement('button');
    bouton.setAttribute('id', 'reload');
    bouton.setAttribute('onclick', 'refresh()');
    bouton.innerHTML = "Recommencer";
    main.appendChild(bouton);
}

function refresh(){
    window.location.reload();
}