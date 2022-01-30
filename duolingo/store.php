<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/class.css">
    <link rel="stylesheet" href="style/store.css">
    <script src="script/store.js"></script>
    <script src="script/class.js"></script>
    <title>Boutique</title>
</head>
<body onload="afficherQuestionnaire(0)">
<header>
        <div id="menu">
        <ul>
            <a href="learn.php"><li><i class="fas fa-graduation-cap"></i>Apprendre</li></a>
            <a href="stories.php"><li><i class="fas fa-book-open"></i>Histoires</li></a>
            <a href="chat.php"><li><i class="far fa-comments"></i>Discussion</li></a>
            <a href="store.php"><li><span class="menu_actif"><i class="fas fa-store"></i>Boutique<div class="barre_menu_actif"></div></li></span></a>
            <li><i class="fas fa-ellipsis-h"></i>Autres</li>
        </ul>
        </div>
        <div id="utilisateur">
            <i class="fas fa-flag-usa" id="drapeau"></i>
            <span><i class="fas fa-crown"></i> 0</span>
            <!-- INFORMATIONS SÉRIES -->
            <span onmouseover="afficherMenu('series')"><i class="fas fa-fire"></i> 0</span>
            <div id="series" onmouseleave="masquerMenu('series')">
                <div id="entete_series">
                    <img src="images/flame.jpg" alt="Flame">
                    <p>Coucou</p>
                </div>
                <div id="jours">
                    <p>M</p>
                    <p>J</p>
                    <p>V</p>
                    <p>S</p>
                    <p>D</p>
                    <i class="far fa-check-circle"></i>
                    <i class="far fa-check-circle"></i>
                    <i class="far fa-check-circle"></i>
                    <i class="far fa-check-circle"></i>
                    <i class="far fa-check-circle"></i>
                </div>
            </div>
            <!-- INFORMATIONS LINGOTS -->
            <span onmouseover="afficherMenu('lingots')"><i class="fas fa-square"></i> 0</span>
            <div id="lingots" onmouseleave="masquerMenu('lingots')">
                <img src="images/chest.jpg" alt="coffre">
                <div>
                    <h3>Lingots</h3>
                    <p>Tu as 0 lingots</p>
                    <a href="">Ouvrir la boutique</a>
                </div>
            </div>
            <!-- INFORMATIONS UTILISATEUR -->
            <i class="fas fa-user" onmouseover="afficherMenu('utilisateur')"></i>
            <div id="infos_utilisateur" onmouseleave="masquerMenu('utilisateur')">
                <p>Compte</p>
                <a href="">Mon profil</a>
                <a href="">Paramètre</a>
                <a href="">Aide</a>
                <a href="">Se déconnecter</a>
            </div>
        </div>
    </header>
    <main id="main" onmouseover="masquerMenu()">

    <h2>Question n°<span id="numero_question"></span> sur <span id="total_question"></span></h2>
    <p>Comment dit-on "<span id="question"></span>" en <span id="langue"></span> ?</p>
    <h2>Réponses (une seule réponse est correcte) :</h2>
    <div id="div_reponses">

    </div>
    <button id="bouton_suivant">Question suivante</button>

    <div id="div_progression">
        <div id="progression_utilisateur">
            <img src="images/walking.gif" alt="Bonhomme qui marche" id="walking_gif">
        </div>
        <img src="images/diplome.png" alt="Diplome" id="diplome">
    </div>
    

    <p id="erreur_cocher">Veuillez cocher une réponse parmi les choix !</p>

<!--
<div id="note">
    <h1>6/10</h1>
    <img src="images/chouette_dance.gif" alt="Chouette contente">
    <p>Ouille, peut-être faudrait-il réviser encore un peu !</p>
</div>

<div class="div_reponse bonne_reponse">


        <h3>Question n°<span id="numero_question"></span> sur <span id="total_question"></span></h3>
        <p>Comment dit-on "<span id="question"></span>" en <span id="langue"></span> ?</p>
        <p>Votre réponse était <span id="reponse_utilisateur">reponse</span></p>
        <p id="verdict"><span class="vert">C'est la bonne réponse !</span></p>
</div>

<div class="div_reponse mauvaise_reponse">
        <h3>Question n°<span id="numero_question"></span> sur <span id="total_question"></span></h3>
        <p>Comment dit-on "<span id="question"></span>" en <span id="langue"></span> ?</p>
        <p>Votre réponse était <span class="reponse_utilisateur">reponse</span></p>
        <p><span class="rouge">Mauvaise réponse ! La bonne réponse était <span>bonne réponse</span></span></p>
        </div>

        <div class="div_reponse mauvaise_reponse">
        <h3>Question n°<span id="numero_question"></span> sur <span id="total_question"></span></h3>
        <p>Comment dit-on "<span id="question"></span>" en <span id="langue"></span> ?</p>
        <p>Votre réponse était <span class="reponse_utilisateur">reponse</span></p>
        <p><span class="rouge">Mauvaise réponse ! La bonne réponse était <span>bonne réponse</span></span></p>
        </div>

        <div class="div_reponse mauvaise_reponse">
        <h3>Question n°<span id="numero_question"></span> sur <span id="total_question"></span></h3>
        <p>Comment dit-on "<span id="question"></span>" en <span id="langue"></span> ?</p>
        <p>Votre réponse était <span class="reponse_utilisateur">reponse</span></p>
        <p><span class="rouge">Mauvaise réponse ! La bonne réponse était <span>bonne réponse</span></span></p>
        </div>

        <div class="div_reponse mauvaise_reponse">
        <h3>Question n°<span id="numero_question"></span> sur <span id="total_question"></span></h3>
        <p>Comment dit-on "<span id="question"></span>" en <span id="langue"></span> ?</p>
        <p>Votre réponse était <span class="reponse_utilisateur">reponse</span></p>
        <p><span class="rouge">Mauvaise réponse ! La bonne réponse était <span>bonne réponse</span></span></p>
        </div>

        <button id="reload" onclick="refresh()">Recommencer</button>
-->
    </main>

</body>
</html>