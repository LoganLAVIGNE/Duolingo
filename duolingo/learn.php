<?php
    //On définit la fonction de convertion de taille de fichiers
    function convertion($bytes){
        if($bytes >= 1073741824)
        { 
            $bytes = number_format($bytes / 1073741824, 2).' Go'; 
        }
        elseif($bytes >= 1048576)
        { 
            $bytes = number_format($bytes / 1048576, 2).' Mo';
        } 
        elseif($bytes >= 1024)
        { 
            $bytes = number_format($bytes / 1024, 2).' Ko';
        }
        elseif($bytes > 1) 
        { 
            $bytes = $bytes.' octets';
        }
        elseif($bytes == 1)
        { 
            $bytes = $bytes.' octet'; 
        }
        else
        { 
            $bytes = '0 octets'; 
        } 
        return $bytes;
    }

    function dirSize($directory) {
        $size = 0;
        foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $file){
            $size+=$file->getSize();
        }
        return $size;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/class.css">
    <link rel="stylesheet" href="style/menu.css">
    <script src="script/class.js"></script>
    <title>Apprendre</title>
</head>
<body>
    <header id="header">
        <div id="menu">
        <ul>
            <a href="learn.php"><li><span class="menu_actif"><span><i class="fas fa-graduation-cap"></i>Apprendre</span><div class="barre_menu_actif"></div></li></span></a>
            <a href="stories.php"><li><span><i class="fas fa-book-open"></i>Histoires</span></li></a>
            <a href="chat.php"><li><span><i class="far fa-comments"></i>Discussion</span></li></a>
            <a href="store.php"><li><span><i class="fas fa-store"></i>Boutique</span></li></a>
            <li onmouseover="afficherMenu('autres')"><span><i class="fas fa-ellipsis-h"></i>Autres</span>
                <div id="autres" onmouseleave="masquerMenu('autres')">
                    <p><?php
                        echo 'Taille du dossier images : '.convertion(dirSize('images')).'<br>';
                        echo 'Taille du dossier script : '.convertion(dirSize('script')).'<br>';
                        echo 'Taille du dossier style : '.convertion(dirSize('style')).'<br>';
                        echo 'Taille du dossier PDF : '.convertion(filesize('guide_duolingo.pdf'));
                    ?></p>
                </div>
            </li>
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
    <main onmouseover="masquerMenu()">
        <!-- PARTIE GAUCHE -->
        <div id="col_gauche">
            <div id="entete_gauche">
                <p>À toi de jouer !</p>
                <p>Si tu débutes, commence par l'unité Introduction..<br>Si tu as déjà les bases, passe un test rapide.</p>
                <div>
                    <img src="images/oeuf.jpg" alt="Introduction">
                    <p>OU</p>
                    <img src="images/temple.jpg" alt="Temple">
                    <p>Intro</p>
                    <p></p>
                    <p>Test de niveau</p>
                </div>
            </div>
            
            <div class="une_image">
            <img src="images/image.jpg" alt="Image">
            <p>Bonjour !</p>
            </div>

            <div class="deux_images">
                <img src="images/image.jpg" alt="Image">
                <img src="images/image.jpg" alt="Image">
                <p>Ça va ?</p>
                <p>Voyages</p>
            </div>

            <div class="deux_images">
                <img src="images/image.jpg" alt="Image">
                <img src="images/image.jpg" alt="Image">
                <p>Restos</p>
                <p>Achats</p>
            </div>

            <div class="deux_images">
                <img src="images/image.jpg" alt="Image">
                <img src="images/image.jpg" alt="Image">
                <p>A/An ?</p>
                <p>Famille</p>
            </div>

            <div class="deux_images">
                <img src="images/image.jpg" alt="Image">
                <img src="images/image.jpg" alt="Image">
                <p>Études</p>
                <p>Restos 2</p>
            </div>

            <div class="contenu_grise">
            <div class="une_image">
                <img src="images/image.jpg" alt="Image">
                <p>Bonjour !</p>
            </div>

            <div class="deux_images">
                <img src="images/image.jpg" alt="Image">
                <img src="images/image.jpg" alt="Image">
                <p>Ça va ?</p>
                <p>Voyages</p>
            </div>

            <div class="deux_images">
                <img src="images/image.jpg" alt="Image">
                <img src="images/image.jpg" alt="Image">
                <p>Restos</p>
                <p>Achats</p>
            </div>

            <div class="deux_images">
                <img src="images/image.jpg" alt="Image">
                <img src="images/image.jpg" alt="Image">
                <p>A/An ?</p>
                <p>Famille</p>
            </div>

            <div class="deux_images">
                <img src="images/image.jpg" alt="Image">
                <img src="images/image.jpg" alt="Image">
                <p>Études</p>
                <p>Restos 2</p>
            </div>
        </div>
        </div>
        <!-- FIN PARTIE GAUCHE -->
        



        <!-- PARTIE DROITE -->
        <div id="col_droite">
            <button onclick="changerCouleurHeader()">Changer couleur</button>
            <input type="color" name="" id="input_color" oninput="changerCouleurHeader()">
        </div>
        <!-- FIN PARTIE DROITE -->
    </main>
    <footer>

    </footer>
</body>
</html>