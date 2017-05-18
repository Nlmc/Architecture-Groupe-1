<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="stylesheet" href="css/style.css">
	<title>A propos</title>
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
	<main class="a-propos clearfix">
		<ul>
			<a href="homepage.php"><li>Accueil</li></a>
			<a href="#"><li>A propos</li></a>
		</ul>
		<h1>A propos</h1>
		<div class="line"></div>
		<div class="container">
			<div class="content">
				<div class="title">
					<h2>Qui somme nous ?</h2>
					<div class="bg1"></div>
				</div>
				<p>Depuis 1990, la revue "L'Architecture de votre région" propose un panorama détaillé de l'architecture d'une région, d'un territoire ou d'un pays.</p>
				<p>Les sondages réalisés attestent de sa durée de vie et par son aspect référentiel, de sa fréquente consultation.</p>
				<p>Une part prépondérante est laissée à "l'image" - le soin apporté aux reproductions photographiques est la garantie d'une attention particulière des lecteurs.</p>
				<p>La revue "L'Architecture de votre région" est le témoignage des hommes qui construisent aujourd'hui. Elle constitue ainsi la vitrine de leur création.</p>
				<p>Par sa diffusion ciblée, c'est aussi un support d'une exceptionnelle efficacité et porteur d'image pour tous les partenaires rédacteurs, entreprises, institutionnels et sociétés qui y participent.</p>
			</div>
			<div class="content">
				<h2>Une approcher régionale</h2>
				<div class="bg2"></div>
				<p>Véritable vitrine de la création architecturale d'une région ou d'un pays, elle est réalisée avec le concours des architectes représentatifs de la construction, du bâtiment, de l'urbanisme, de l'environnement et de l'aménagement du territoire.</p>
				<p>Pour chaque architecte volontaire et dans chaque région, un reportage complet est publié avec son logo, ses coordonnées, sa raison sociale, 3 à 4 photos par réalisation et un rédactionnel détaillé auxquels s'ajoute une fiche technique comprenant maâtre d'ouvrage, maître d'œuvre, surface, durée, coût des travaux, entreprises, fabricants et fournisseurs utilisés.</p>
			</div>
			<div class="content">
				<h2>Une présence régionale, nationale et international</h2>
				<div class="bg3"></div>
				<p>Depuis 1990, la revue "L'Architecture de votre région" propose un panorama détaillé de l'architecture d'une région, d'un territoire ou d'un pays.</p>
				<p>Les sondages réalisés attestent de sa durée de vie et par son aspect référentiel, de sa fréquente consultation.</p>
				<p>Une part prépondérante est laissée à "l'image" - le soin apporté aux reproductions photographiques est la garantie d'une attention particulière des lecteurs.</p>
				<p>La revue "L'Architecture de votre région" est le témoignage des hommes qui construisent aujourd'hui. Elle constitue ainsi la vitrine de leur création.</p>
				<p>Par sa diffusion ciblée, c'est aussi un support d'une exceptionnelle efficacité et porteur d'image pour tous les partenaires rédacteurs, entreprises, institutionnels et sociétés qui y participent.</p>
			</div>
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