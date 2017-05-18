<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>L'architecture</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="header clearfix">
        <a href="homepage.php"><img src="img/logo-site.png" alt="logo du site" class="logo-site"></a>
        <span class="burger"><img src="img/burgermenu.png" alt="" class="icon"></span>
    </div>
    <div class="menu hide">
        <a href="homepage.php" class="item">Accueil</a>
        <a href="revues.php" class="item">Nos revues</a>
        <a href="commandes.php" class="item">Commandes</a>
        <a href="appel-offre.php" class="item">Appel d'offre</a>
        <a href="actualites.php" class="item">Actualités</a>
        <a href="contact.php" class="item">Contact</a>
    </div>

    <script>
    //BURGERMENU
    var burger = document.querySelector(".burger");
    var menu = document.querySelector(".menu");
    burger.addEventListener("click", function(){
        menu.classList.toggle("hide");
    });
    </script>

    <main class="homepage clearfix">
    
        <div class="splash">
            <h1>l'actualité de <span class="negative">l'architecture </span><br>et de la const<span class="negative">ruction</span></h1>
            <div class="ligne-horizontale"></div>
        </div>
    
        <div class="splashimg clearfix">
            <div class="img">
                <p>Depuis 1990, la revue "L'Architecture de votre région" propose un panorama détaillé de l'architecture d'une région, d'un territoire ou   d'un pays.</p>
                <a href="a-propos.php" class="button">Notre histoire →</a>
                <img src="img/homepage-img.png" alt="aperçu">
            </div>
        </div>
    
        <div class="ligne-verticale"></div>
    
        <div class="parutions clearfix">
            <p class="number"><span>01</span> Dernière revue</p>
            <div class="parutionsimg clearfix">
                <img src="img/mag1.png" alt="actualité" class="img1">
                <img src="img/mag2.png" alt="actualité" class="img2">
            </div>
            <div class="infos">
                <h2 class="numero-magazine">N° 279</h2>
                <p class="region">alsace</p>
                <a href="commandes.php" class="bouton">Commander</a>
                <a href="abonnement.php" class="bouton">S'abonner</a>
                <a href="http://fr.calameo.com/read/0011212993e4406f651e8" class="lecture">Lire ce numéro →</a>
            </div>
            <a href="revues.php" class="lecture plus">Toutes les revues →</a>
        </div>
    
        <div class="ligne-verticale"></div>
    
        <div class="">
            <p class="number"><span>02</span> Dernières actualités</p>
        <div class="wrap">
            <!-- CECI EST LE CAROUSEL -->
            <div class="carousel">
                <div class="carousel-inner">
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item">
                        <img src="img/car1.png">
                    </div>
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item">
                        <img src="img/car2.png">
                    </div>
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item">
                        <img src="img/car3.png">
                    </div>
                    <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                    <label for="carousel-2" class="carousel-control next control-1">›</label>
                    <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                    <label for="carousel-3" class="carousel-control next control-2">›</label>
                    <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                    <label for="carousel-1" class="carousel-control next control-3">›</label>
                    <ol class="carousel-indicators">
                        <li>
                            <label for="carousel-1" class="carousel-bullet">•</label>
                        </li>
                        <li>
                            <label for="carousel-2" class="carousel-bullet">•</label>
                        </li>
                        <li>
                            <label for="carousel-3" class="carousel-bullet">•</label>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
            <!-- FIN DU CAROUSEL -->
    
            <a href="actualites.php" class="lecture plus">Tous les articles →</a>
        </div>
    </main>
    <div class="footer">
        <p class="firstchild">Groupe SOFRE&COM Société Française d'Edition et de Communication</p>
        <p>9/11 rue Jacquard - 93315 Le Pré Saint Gervais cedex - France</p>
        <p>2017 - © L'Architecture - Tous droits réservés</p>
        <a href="#">Mentions légales</a>
    </div>
</body>
</html>