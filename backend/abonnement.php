<?php
include_once("class.php");
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Abonnement</title>
  </head>
  <body>
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
        echo "Les champs avec * sont obligatoire";
      }
     ?>
    <form class="" action="abonnement.php" method="post">
      <label for="">Raison sociale</label>
      <input type="text" name="social" value="">
      <label for="">Activité</label>
      <input type="text" name="activite" value="">
      <label for="">Nom</label>
      <input type="text" name="nom" value="">
      <label for="">Prénom</label>
      <input type="text" name="prenom" value="">
      <label for="">Fonction</label>
      <input type="text" name="fonction" value="">
      <label for="">Adresse</label>
      <input type="text" name="adresse" value="">
      <label for="">Code Postal</label>
      <input type="text" name="cp" value="">
      <label for="">Ville</label>
      <input type="text" name="ville" value="">
      <label for="">Pays</label>
      <input type="text" name="pays" value="">
      <label for="">Téléphone</label>
      <input type="text" name="tel" value="">
      <label for="">Fax</label>
      <input type="text" name="fax" value="">
      <label for="">Adress e-mail</label>
      <input type="text" name="email" value="">
      <label for="">Verifiez l'adresse email</label>
      <input type="text" name="verify" value="">
      <label for="">Zone géographique</label>
      <input type="text" name="geo" value="">
      <label for="">Choix de la revue</label>
      <input type="text" name="num" value="">
      <label for="">Quantité</label>
      <input type="text" name="quantite" value="">
      <input type="submit" name="" value="Envoyer">
    </form>

  </body>
</html>
