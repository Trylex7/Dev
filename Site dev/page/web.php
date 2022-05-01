<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../asset/style/style.css" type="text/css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
	<title>Crée ton site web facilement</title>
</head>
<!-- Barre de navagation -->
<nav>
<?php
include('../theme/header2.php');
?>

</nav>
<!-- FIN DE NAV -->
<main>
  <div class="content-title">Nos produits</div>
  <hr>
	 <div style="float:left;margin: 50px;left: 50px;"class="product-card">
        <div class="product-details">
            <span class="product-catagory">Pack Starter</span>
            <h4>Caractéristiques</h4>
            <p>
                <span style="color:green;margin:0"class="material-symbols-outlined">check</span ><span class="details-text">2 Go de stockage</span> 
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">1 base de donnée</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">1 domaine (non fournis)</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">1 boite mail</span>
                <br>
                <span style="color:red"class="material-symbols-outlined">close</span><span class="details-text">Sous-domaine</span>
                <br>
                <span style="color:red"class="material-symbols-outlined">close</span><span class="details-text">Ftp additionnels</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">Anti-DDOS</span>

           </p>
            <div class="product-bottom-details">
                <div class="product-price">9.99€/mois</div>
 
              <button style="margin-left: 50px;margin-top: 10px;"class="commande">Commander</button> 
             
                
            </div>
        </div>
    </div>
         <div style="float:left;margin: 50px;margin-left: 80px;"class="product-card">
        <div class="product-details">
            <span class="product-catagory">Pack Business</span>
            <h4>Caractéristique</h4>
            <p>
            <span style="color:green;margin:0"class="material-symbols-outlined">check</span ><span class="details-text">5 Go de stockage</span> 
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">3 base de donnée</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">2 domaine (non fournis)</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">5 boites mail</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">1 Sous-domaine</span>
                <br>
                <span style="color:red"class="material-symbols-outlined">close</span><span class="details-text">Ftp additionnels</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">Anti-DDOS</span>         
            </p>
            <div class="product-bottom-details">
                <div class="product-price">14.99€/mois</div>

                
                <button style="margin-left: 50px;margin-top: 10px;"class="commande">Commander</button>
                
            </div>
        </div>
    </div>
         <div style="float:right;margin: 50px; right:40px; align-content:center;"class="product-card">
        <div class="product-details">
            <span class="product-catagory">Pack Professionnel</span>
            <h4>Caractéristiques</h4>
            <p>
            <span style="color:green;margin:0"class="material-symbols-outlined">check</span ><span class="details-text">10 Go de stockage</span> 
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">Base de donnée illimitées</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">10 domaine (non fournis)</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">Boite mail illimitées</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">4 Sous-domaines</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">Ftp additionnels illimités</span>
                <br>
                <span style="color:green"class="material-symbols-outlined">check</span><span class="details-text">Anti-DDOS préventif</span>
           </p>
            <div class="product-bottom-details">
                <div class="product-price">19.99€/mois</div>

                <button style="margin-left: 50px;margin-top: 10px;"class="commande">Commander</button>
            </div>
        </div>
    </div>
</div>   
</main>
</body>
</html>

 


































