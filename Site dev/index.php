<?php
session_start();
include('config/dbconnection.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="asset/style/style.css" />
    <link rel="stylesheet" type="text/css" href="asset/style/footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
        href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
    body {
        background-color: rgb(228, 228, 228);
    }
    </style>
    <title>Crée ton site web facilement</title>
</head>
<!-- Barre de navagation -->
<nav>
    <?php 
include_once('theme/header.php');
?>
</nav>
<main>
    <div class="content">
        <div class="title-content">Bienvenue!</div>
        <div class="slogan">Trouver ce qui vous correspond.<br>Avec Findhosting trouver ce qui vous correspond!</div>
        <button class="inscription" onclick="location.href='PHP/register.php';">Je veux être client</button>
        <button class="login" onclick="location.href='PHP/login.php';">Je suis déjà client</button>
    </div>

    <div class="avantage">
        <div class="content-title">Nos avantages</div>
        <div class="content-sous-title">Vous n'êtes pas convaincu ? Voici quelques points pour vous convaincre.</div>
        <hr>
        <div style="align-content:center;"class="content-product">
            <div class="content-product-title">Support Client</div>
            <img src="asset/image/support.png">
            <div class="content-text">
            En cas de soucis, notre équipe sera présente pour vous fournir de l'aide dans un délai assez court.
            </div>
        </div>

        <div class="content-product">
            <div class="content-product-title">Faible latence</div>
            <img src="asset/image/signal.png">
            <div class="content-text">
            Nos serveurs sont localisés dans un centre de données à Paris permettant d'assurer une faible latence.
            </div>
        </div>

        <div class="content-product">
            <div class="content-product-title">Anti-DDOS</div>
            <img src="asset/image/ddos.png">
            <div class="content-text">
            Nos serveurs sont équipés d'une protection en cas d'attaques DDOS pouvant encaisser jusqu'à 2 Tbps.
            </div>
        </div>

        <div class="content-product">
            <div class="content-product-title">Matériel</div>
            <img src="asset/image/matériel.png">
            <div class="content-text">
              Nous utilisons du matériel de dernière génération assurant une fiabilité et des performances optimales.</div>
        </div>

        <div class="content-product">
            <div class="content-product-title">Sécurité</div>
            <img src="asset/image/security.png">
            <div class="content-text">
              Nos serveurs sont en permanence sous surveillance pour assurer un uptime de 99.9%</div>
        </div>

        <div class="content-product">
            <div class="content-product-title">Protection de vos données</div>
            <img src="asset/image/lock.png">
            <div class="content-text">
              Nous mettons à votre disposition des SSD de haute qualité ainsi que des sauvegardes programmables.</div>
        </div>
</div>
</p>

    <div style="margin-top: 30px;" class="content-title">Nos produits
        <hr>
        <button style="margin: 30px;" onclick="location.href='page/web';" class="offres">Découvrez nos offres
            d'hebergement</button>


</main>
<footer>
    <?php 
include('theme/footer.php');
?>
</footer>

</html>