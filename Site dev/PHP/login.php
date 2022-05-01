<?php
  session_start();
  include('../config/dbconnection.php'); // Fichier PHP contenant la connexion à votre BDD
  error_reporting(0);
 // S'il y a une session alors on ne retourne plus sur cette page
   if (isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit;
  }
 
  // Si la variable "$_Post" contient des informations alors on les traitres
  if(!empty($_POST)){
    extract($_POST);
    $valid = true;
 
    if (isset($_POST['connexion'])){
      $mail = htmlentities(strtolower(trim($mail)));
      $mdp =  trim($mdp);
      
 
      if(empty($mail)){ // Vérification qu'il y est bien un mail de renseigné
        $valid = false;
        $er_mail = "Il faut mettre un mail";
      }
 
      if(empty($mdp)){ // Vérification qu'il y est bien un mot de passe de renseigné
        $valid = false;
        $er_mdp = "Il faut mettre un mot de passe";
      }
 
      // On fait une requête pour savoir si le couple mail / mot de passe existe bien car le mail est unique !
      $req = $DB->query("SELECT *
        FROM utilisateur
        WHERE mail = ? AND mdp = ?",
        array($mail,$mdp));
      $req = $req->fetch();
 
      // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
      if ($req['id'] == ""){
        $valid = false;
        $er_false = "Le mail ou le mot de passe est incorrecte";
      }
 
      // Si le token n'est pas vide alors on ne l'autorise pas à accéder au site

 
      // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
      if ($valid){
        $_SESSION['id'] = $req['id']; // id de l'utilisateur unique pour les requêtes futures
        $_SESSION['nom'] = $req['nom'];
        $_SESSION['prenom'] = $req['prenom'];
        $_SESSION['mail'] = $req['mail'];
 
        header('Location: ../index.php');
        exit;
      } 


    }
  }    
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../asset/style/login.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  
<script>
function Afficher()
{ 
var input = document.getElementById("motdepasse"); 
if (input.type === "password")
{ 
input.type = "text"; 
} 
else
{ 
input.type = "password"; 
} 
} 
</script>
  <title>Se connecter</title>
</head>
<body>
<div class="container">
    <form method="post" class="login-email">
    <p class="login-text" style="font-size: 2rem;">Se connecter</p>

    <div class="input-group">
      <input type="email"style="color:white;" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>">
  	  </div>

      <div class="input-group">
      <input type="password"style="color:white;" id="motdepasse" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>">
      </div>      
      <input  style="margin-left:15px;"class="checkbox" id="cacher" name="cacher" type="checkbox" onclick="Afficher()">
      <label style="color:white;"for="cacher">Afficher le mot de passe</label>
      <?php
        if (isset($er_mail)){
      ?>
        <div class="alerte"><?= $er_mail ?></div>
      <?php 
        }
      ?>
            <?php
       if (isset($er_false)){
      ?>
        <div class="alerte"><?= $er_false ?></div>
      <?php 
        }
      ?>
      <?php
        if (isset($er_mdp)){
      ?>
        <div class="alerte"><?= $er_mdp ?></div>
      <?php 
        }
      ?>

      <div class="input-group">	
      <button type="submit" class="btn"name="connexion">Se connecter</button>
      </div>
      <p class="login-register-text">Tu n'as pas de compte? Inscrit toi<a href="register.php"> ici</a></p>
      <h5 class="login-register-text"><a href="forgotpassword.php">Mot de passe oublié ?</a></h5>
    </form>
  </body>


</html>










