<?php
  session_start();
  include('../config/dbconnection.php'); // Fichier PHP contenant la connexion à votre BDD
 
  // S'il y a une session alors on ne retourne plus sur cette page
  if (isset($_SESSION['id'])){
    header('Location: login.php');
    exit;
  }
 
  // Si la variable "$_Post" contient des informations alors on les traitres
  if(!empty($_POST)){
    extract($_POST);
    $valid = true;
 
    // On se place sur le bon formulaire grâce au "name" de la balise "input"
    if (isset($_POST['inscription'])){
      $nom = htmlentities(trim($nom)); // On récupère le nom
      $prenom = htmlentities(trim($prenom)); // on récupère le prénom
      $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail
      $mdp = trim($mdp);
      $mdp = trim($mdp); // On récupère le mot de passe
      $confmdp = trim($confmdp); // On récupère la confirmation du mot de passe
 
      // Vérification du nom
      if(empty($nom)){
        $valid = false;
        $er_nom = ("Le nom d' utilisateur ne peut pas être vide");
      }   
 
      // Vérification du prénom
      if(empty($prenom)){
        $valid = false;
        $er_prenom = ("Le prenom d' utilisateur ne peut pas être vide");
      }   
 
      // Vérification du mail
      if(empty($mail)){
        $valid = false;
        $er_mail = "Le mail ne peut pas être vide";
 
        // On vérifit que le mail est dans le bon format
      }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
        $valid = false;
        $er_mail = "Le mail n'est pas valide";
 
      }else{
        // On vérifit que le mail est disponible
        $req_mail = $DB->query("SELECT mail FROM utilisateur WHERE mail = ?",
          array($mail));
 
        $req_mail = $req_mail->fetch();
 
        if ($req_mail['mail'] <> ""){
          $valid = false;
          $er_mail = "Ce mail existe déjà";
        }
      }
 
      // Vérification du mot de passe
      if(empty($mdp)) {
        $valid = false;
        $er_mdp = "Le mot de passe ne peut pas être vide";
 
      }elseif($mdp != $confmdp){
        $valid = false;
        $er_mdp = "La confirmation du mot de passe ne correspond pas";
      }
 
      // Si toutes les conditions sont remplies alors on fait le traitement
      if($valid){
 
        $date_creation_compte = date('Y-m-d H:i:s');
 
        // On insert nos données dans la table utilisateur
        $DB->insert("INSERT INTO utilisateur (nom, prenom, mail, mdp, date_creation_compte) VALUES
          (?, ?, ?, ?, ?)",
          array($nom, $prenom, $mail, $mdp, $date_creation_compte));
 
        header('Location: login.php');
        exit;
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inscription</title>
</head>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../asset/style/login.css">

	<title>S'inscrire</title>
</head>

 <body>  
 <div class="container">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">S'inscrire</p>
    
    <form method="post" class="login-email">
      <?php
        // S'il y a une erreur sur le nom alors on affiche
        if (isset($er_nom)){
        ?>
          <div class="alerte"><?= $er_nom ?></div>
        <?php 
        }
      ?>
      <div class="input-group">
      <input type="text" style="color:white;" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>" >
      </div> 

      <div class="input-group">
      <input type="text" style="color:white;" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>" >
      </div> 
      <?php
        if (isset($er_prenom)){
        ?>
          <div class="alerte"><?= $er_prenom ?></div>
        <?php 
        }
      ?>
      <div class="input-group">
      <input type="email"style="color:white;" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" >
      </div>
      <?php
        if (isset($er_mail)){
        ?>
          <div class="alerte"><?= $er_mail ?></div>
        <?php 
        }
      ?>
      <div class="input-group">
      <input style="color:white;" type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" >
      </div>
      <div class="input-group">
      <input style="color:white;"type="password" placeholder="Confirmer le mot de passe" name="confmdp" >
      </div>      <?php
        if (isset($er_mdp)){
        ?>
          <div class="alerte"><?= $er_mdp ?></div>
        <?php 
        }
      ?>
      <div class="input-group">
      <button type="submit" class="btn" name="inscription">S'inscrire</button>
      </div>
      <p style="color:white;" class="login-register-text">Tu as déja compte? <a href="login.php">Se connecter ici</a>.</p>
    </form>
</div>
</body>
</html>





