<?php
session_start();
session_destroy();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../asset/logout.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <script type="text/javascript">
      function RedirectionJavascript(){
        document.location.href="../index.php";
      }
    </script>
	<title>Déconnection</title>
</head>

<body onLoad="setTimeout('RedirectionJavascript()', 5000)">
  <section id="content03" style="align-content:center;opacity: 100%;" class="container">
    <div class="circle animation">
      <span class="cover1"></span>
      <span class="cover2"></span>
      <span class="check">&#x02713;</span>
       </div>
       <h2>Tu as été déconnecter avec succès.<br>
           Tu vas être rediriger vers l'acceuil dans 5 secondes...
       </h2>
    </section>
<script>
    setInterval(function() {
        var el = document.querySelector(".circle");
        el.classList.remove("animation");
        setTimeout(function() {
          el.classList.add("animation");
        }, 16);
      }, 3000);
      clearTimeout(function);
    </script>