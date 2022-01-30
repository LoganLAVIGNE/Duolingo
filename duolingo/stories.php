<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/class.css">
    <link rel="stylesheet" href="style/stories.css">
    <script src="script/class.js"></script>
    <script src="script/stories.js"></script>
    <title>Histoires</title>
</head>
<body>
    <header>
        <div id="menu">
        <ul>
            <a href="learn.php"><li><i class="fas fa-graduation-cap"></i>Apprendre</li></a>
            <a href="stories.php"><li><span class="menu_actif"><i class="fas fa-book-open"></i>Histoires<div class="barre_menu_actif"></div></li></span></a>
            <a href="chat.php"><li><i class="far fa-comments"></i>Discussion</li></a>
            <a href="store.php"><li><i class="fas fa-store"></i>Boutique</li></a>
            <li><i class="fas fa-ellipsis-h"></i>Autres</li>
        </ul>
        </div>
        <div id="utilisateur">
            <i class="fas fa-flag-usa" id="drapeau"></i>
            <span><i class="fas fa-crown"></i> 0</span>
            <span><i class="fas fa-fire"></i> 0</span>
            <span><i class="fas fa-square"></i> 0</span>
            <i class="fas fa-user"></i>
        </div>
    </header>
    <main>
        <div id="chouette">
            <img src="images/chouette.gif" alt="Chouette" id="img_chouette">
            <div id="bulle_dialogue">
                <img src="images/bulle_dialogue.png" alt="Bulle dialogue">
                <p id="message_bulle">Bienvenue sur Duolingo<br>rrrou rrrouuu !</p>
                <a href="guide_duolingo.pdf" target="_blank" rel="noopener noreferrer"><button id="button_histoires" onmouseover="messageChouette()" onmouseleave="messageDefaut()">Lire les histoires</button></a>
            </div>
        </div>
    </main>

</body>
</html>