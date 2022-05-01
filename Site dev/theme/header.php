<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../asset/style/style.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" /> <style>
      body{
        background-color:rgb(228, 228, 228); 
      }
      </style>
	<title>Crée ton site web facilement</title>
</head>

<nav>
	<div class="onglets">
		<a style="font-size: 18px" href="index">Acceuil</a>
    	<a style="font-size: 18px" href="#">Crée ton site web</a>
    	<a style="font-size: 18px" href="page/web">Héberge son site web</a>
  
        <?php
   if(!isset($_SESSION['id'])){ // Si on ne détecte pas de session alors on verra les liens ci-dessous
  ?>
  <a style="font-size: 18px" href="php/login"><i class="fa fa-sign-in-alt"></i>Se connecter</a>
  
  <?php
    }else{ // Sinon s'il y a une session alors on verra les liens ci-dessous
  ?>
<a href="#">Espace Client</a>


</div>  
  <?php
   }
  ?>
</nav>
</body>