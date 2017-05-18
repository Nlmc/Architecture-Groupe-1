<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="stylesheet" href="css/style.css">
	<title>Contact</title>
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
	<main class="contact clearfix">
		<ul>
			<a href="homepage.php"><li>Accueil</li></a>
			<a href="#"><li>Contact</li></a>
    </ul>
		<h1>Contact</h1>
		<div class="line"></div>

    <div class="formulaire">
      <form action="" method="post">
          <div>
              <label for="nom">Nom :</label>
              <input type="text" id="nom" />
          </div>
          <div>
              <label for="telephone">Téléphone :</label>
              <input type="tel" id="telephone" />
          </div>
          <div>
              <label for="mail">Mail</label>
              <input type="email" id="mail" />
          </div>
          <div>
          <div>
            <label for="service">Service</label>
            <select name="service">
              <option value="sav">SAV</option>
              <option value="Réclamations">Réclamations</option>
              <option value="Question">Question</option>
              <option value="Contact">Contact</option>
            </select>
          </div>
          <div>
              <br><label for="message">Message :</label>
              <textarea id="message">Saisissez votre message</textarea>
          </div>

          <div class="button">
              <button type="submit">Envoyer votre message</button>
          </div>
      </form>
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