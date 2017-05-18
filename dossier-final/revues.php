<?php 
include_once('backend/class.php');

$crud = new Crud();

$query = "SELECT `id`, `num`, `annee`, `region`, `image` FROM `archi` ORDER BY id DESC";
$result = $crud->getData($query);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="stylesheet" href="css/style.css">
	<title>Les Revues</title>
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
	<main class="revues clearfix">
		<ul>
			<a href="homepage.php"><li>Accueil</li></a>
			<a href="#"><li>Revues_</li></a>
		</ul>
		<h1>Revues</h1>
		<div class="line"></div>
		<div class="container">
			<div class="classement">
				<p>Par parution</p>
				<form action="/action_page.php">
  					<select name="type" class="select">
    					<option value="revues" class="item">Revues</option>
    					<option value="parution" class="item">Parutions</option>
  					</select>
				</form>
			</div>
			<div class="list-revues">

				<?php foreach ($result as $key => $res) { ?>

				<article>
					<span><?=$res['region']?></span>
					<br>
					<p><?=$res['annee']?></p>
					<img src="<?=$res['image']?>" alt="">
					<div class="numero">
						<p><?=$res['num']?></p>
					</div>
					<a href="commandes.php"><div class="commander">Commander</div></a>
					<a href="http://fr.calameo.com/read/001121299ba572cf53fca"><div class="lire">Lire</div></a>
					<a href="partenaires.php"><div class="partenaires">Partenaires</div></a>
				</article>

				<?php }?>

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