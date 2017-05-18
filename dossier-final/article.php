<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="stylesheet" href="css/style.css">
	<title>Article</title>
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
	<main class="article clearfix">
		<ul>
			<a href="homepage.php"><li>Accueil</li></a>
			<a href="actualites.php"><li>Actualités</li></a>
			<a href="#"><li>Article_</li></a>
		</ul>
		<h1>Construction d'un ensemble de bureaux au Plessis</h1>
		<p class="date">21/05/2009</p>
		<div class="line"></div>
		<div class="container">
			<p class="p1">Situé au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor.L’immeuble tertiaire « Astrale » permet de répondre aussi bien à un mono utilisateur qu’à un grand nombre de locataires.D’une capacité d’accueil de 1 500 personnes, avec une surface de 25 000 m2 SHON et 56 000m2 SHOB, il intègre 760 places de parkings sur 2 niveaux de sous-sol et un restaurant 1000 couverts.</p>
			<div class="illustrations">
				<img src="img/actu1.jpg" alt="">
				<img src="img/actu2.jpg" alt="">
				<img src="img/actu3.jpg" alt="">
			</div>
			<p class="p2">Le parti d’implantation est de créer un bâtiment urbain périmétrique permettant de dégager un parc végétal de la plus grande dimension possible en son centre. Le restaurant tout en courbe devient lui même une partie de ce jardin en s’agrémentant d’une terrasse végétalisée. L’ensemble des bâtiments s’articule autour de ce parc où plateaux, paliers, escaliers, rue intérieure et restaurant ont des vues.</p>
		</div>
		<p class="details">Deux halls principaux ponctuent l'édifice en marquant fortement la volumétrie de l'ensemble.
			<br> Au Nord une faille entièrement vitrée accompagnée par une voile en béton blanc courbe offre une transparence entre l'avenue et le jardin intérieur.
			<br>Au Sud, un totem vitré lumineux visible depuis l'A86 englobe les salles de réunion rouges afin de former un signal identitaire.
			<br>L'organisation en plan résulte d'une recherche de confort et de flexibilité des plateaux de bureaux ainsi que d'une optimisationde l'éclairage naturel, y compris pour l'ensemble des circulations verticales et horizontales.
			<br>Les systèmes environnementaux développés sont le traitement de toiture végétalisée avec récupération des eaux de pluies, la mise en place de pompes à chaleur individuelles réversibles raccordées sur une boucle thermodynamique, un système de gestion technique centralisé.</p>
	</main>
	<div class="footer">
    	<p class="firstchild">Groupe SOFRE&COM Société Française d'Edition et de Communication</p>
    	<p>9/11 rue Jacquard - 93315 Le Pré Saint Gervais cedex - France</p>
    	<p>2017 - © L'Architecture - Tous droits réservés</p>
    	<a href="#">Mentions légales</a>
	</div>
</body>
</html>