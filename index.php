<?php include "inc/connexion.inc.php"; ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
   <title>Carte avec Open Street Map</title>
    <meta name="Description" content="Carte avec Open Street Map" />

     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" 
           integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
           crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
           integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
           crossorigin=""></script>
</head>

<body>
<h1>Carte avec Open Street Map</h1>

<!-- AGENCE INSERTION NOUVELLE ============================================= -->
  <?php include "inc/insertion.inc.php"; ?>

<!-- AGENCE LISTE ========================================================== -->
<section id="liste_id"><h2>Liste des spécialistes</h2>
  <p>logo | secteur (km) | latitude | longitude </p>
  <?php include "inc/liste-agence.inc.php"; ?>

<!-- FORMULAIRE AJOUT AGENCE =============================================== -->
  <?php include "inc/formulaire.inc.php"; ?>

</section>

<section id="carte_id"><h2>Carte map</h2>
  <div id='map'></div>
</section>

<footer> Copyright P.Bouquet pour cnam - Mentions légales </footer>

<script type="text/javascript" src="js/map.js"></script>
</body></html>

<!-- lien derniere version leaflet : https://leafletjs.com/download.html            -->