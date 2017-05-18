<?php
include_once("backend/class.php");
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Commande</title>
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
    <?php
      if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['cp'])
      && isset($_POST['ville']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['verify'])) {
        if ($_POST['email'] == $_POST['verify']) {
          $crud = new crud();

          $social = $crud->escape_string($_POST['social']);
          $activite = $crud->escape_string($_POST['activite']);
          $nom = $crud->escape_string($_POST['nom']);
          $prenom = $crud->escape_string($_POST['prenom']);
          $fonction = $crud->escape_string($_POST['fonction']);
          $adresse = $crud->escape_string($_POST['adresse']);
          $cp = $crud->escape_string($_POST['cp']);
          $ville = $crud->escape_string($_POST['ville']);
          $pays = $crud->escape_string($_POST['pays']);
          $tel = $crud->escape_string($_POST['tel']);
          $fax = $crud->escape_string($_POST['fax']);
          $email = $crud->escape_string($_POST['email']);
          $geo = $crud->escape_string($_POST['geo']);
          $num = $crud->escape_string($_POST['num']);
          $quantite = $crud->escape_string($_POST['quantite']);

          $crud->execute("INSERT INTO abo(nom,prenom,adresse,cp,ville,pays,tel,fax,email,geo,num,quantite)
          VALUES ($social,$activite,$nom,$prenom,$fonction,$adresse,$cp,$ville,$pays,$tel,$fax,$email,$geo,$num,$quantite)");
          echo "Commande enregistrée !";
        } else {
          echo "Les emails ne coincident pas.";
        }

      } else {
        echo "<p class='alert-email'>Les champs avec * sont obligatoire</p>";
      }
     ?>
      
      <main class="commandes clearfix">
        <ul>
          <a href="homepage.php"><li>Accueil</li></a>
          <a href="#"><li>Commandes</li></a>
        </ul>
        <h1>Commandes</h1>
        <div class="line"></div>

      <form class="formulaire" action="commandes.php" method="post">
        <label for="social">Raison sociale</label>
        <input type="text" name="social" value="" id="social"><br>
        <label for="activite">Activité</label>
        <input type="text" name="activite" value="" id="activite"><br>
        <label for="nom">Nom*</label>
        <input type="text" name="nom" value="" id="nom"><br>
        <label for="prenom">Prénom*</label>
        <input type="text" name="prenom" value="" id="prenom"><br>
        <label for="fonction">Fonction</label>
        <input type="text" name="fonction" value="" id="fonction"><br>
        <label for="adresse">Adresse*</label>
        <input type="text" name="adresse" value="" id="adresse"><br>
        <label for="cp">Code Postal*</label>
        <input type="text" name="cp" value="" id="cp"><br>
        <label for="ville">Ville*</label>
        <input type="text" name="ville" value="" id="ville"><br>
        <label for="pays">Pays*</label>
        <input type="text" name="pays" value="" id="pays"><br>
        <label for="tel">Téléphone*</label>
        <input type="text" name="tel" value="" id="tel"><br>
        <label for="fax">Fax</label>
        <input type="text" name="fax" value="" id="fax" placeholder="Sans séparation entre les chiffres"><br>
        <label for="email">Adress e-mail*</label>
        <input type="text" name="email" value="" id="email"><br>
        <label for="verify">Verifiez l'adresse email*</label>
        <input type="text" name="verify" value="" id="verify"><br>
        <label for="geo">Zone géographique</label>
        <input type="text" name="geo" value="" id="geo"><br>
        <label for="num">Choix de la revue</label>
        <input type="text" name="num" value="" id="num"><br>
        <label for="quantite">Quantité</label>
        <input type="text" name="quantite" value="" id="quantite"><br>
        <input type="submit" name="" value="Envoyer" class="send">
      </form>
      <div class="footer">
        <p class="firstchild">Groupe SOFRE&COM Société Française d'Edition et de Communication</p>
        <p>9/11 rue Jacquard - 93315 Le Pré Saint Gervais cedex - France</p>
        <p>2017 - © L'Architecture - Tous droits réservés</p>
      <a href="#">Mentions légales</a>
  </div>
  </body>
</html>