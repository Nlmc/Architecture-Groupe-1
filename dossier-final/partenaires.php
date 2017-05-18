<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="stylesheet" href="css/style.css">
	<title>Partenaire</title>
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
	<main class="partenaires clearfix">
		<ul>
			<a href="homepage.php"><li>Accueil</li></a>
			<a href="revues.php"><li>Revues</li></a>
			<a href="#"><li>Partenaires</li></a>
		</ul>
		<h1>Partenaires</h1>
		<div class="line"></div>
		<div class="container">
			<article>
				<p>2017</p>
				<img src="img/revue.png" alt="">
				<div class="numero">
					<p>#281</p>
				</div>
			</article>
			<div class="list-partenaires">
				<div class="groupe">
					<h2>Agencement, Mobilier, Métiers d'art, Décoration, Cheminées</h2>
					<p>Euresco (69)</p>
					<p>Leroux-Pacrau (49)</p>
				</div>
				<div class="groupe">
					<h2>Couverture, Étanchéité, Charpente, Zinguerie</h2>
					<p>Marie Toit (50)</p>
					<p>Etde (14)</p>
				</div>
				<div class="groupe">
					<h2>Agencement, Mobilier, Métiers d'art, Décoration, Cheminées</h2>
					<p>Euresco (69)</p>
					<p>Leroux-Pacrau (49)</p>
				</div>
				<div class="groupe">
					<h2>Couverture, Étanchéité, Charpente, Zinguerie</h2>
					<p>Marie Toit (50)</p>
					<p>Etde (14)</p>
				</div>
				<div class="groupe">
					<h2>Agencement, Mobilier, Métiers d'art, Décoration, Cheminées</h2>
					<p>Euresco (69)</p>
					<p>Leroux-Pacrau (49)</p>
				</div>
				<div class="groupe">
					<h2>Couverture, Étanchéité, Charpente, Zinguerie</h2>
					<p>Marie Toit (50)</p>
					<p>Etde (14)</p>
				</div>
			</div>
		</div>
		<div class="footer">
    	<p class="firstchild">Groupe SOFRE&COM Société Française d'Edition et de Communication</p>
    	<p>9/11 rue Jacquard - 93315 Le Pré Saint Gervais cedex - France</p>
    	<p>2017 - © L'Architecture - Tous droits réservés</p>
    	<a href="#">Mentions légales</a>
	</div>
	</main>
</body>
</html>