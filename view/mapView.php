<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <link rel="stylesheet" href="../public/styles/style.css">
        <title><?=$title?></title>
    </head>
    <body>
        <div class="container mt-2 h-auto">
            <?php
            include("inc/header.php")
            ?>
        <div class="container text-center">
            <p class="h2">La Carte</p>
            <?php
                if (!isset($_SESSION["monID"]) || $_SESSION["monID"] != session_id()) { ?>
                    <p class="h3">Pour accéder à toutes les fonctionnalités de la carte, veuillez vous <a href="?login">connecter</a></p>
                    <?php    }else { ?>
                        <p class="h3">Bonjour, <?=$_SESSION["username"]?>, où voudrais-tu aller?</p>
                        <?php    }
                require_once("../control/mapJSON.php");
                
                ?>
            <div class="hidden" style="display: none"><?=var_dump($result);?></div>
        </div>
        <div class="row d-flex">
            
            <div class="col-10">
                <div id="map"></div>
            </div>
            <div class="col-2">
                <div class="collapse-sm navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php 
                    foreach ($getMaps as $map) {
                        ?>
                        <li class="nav-item">
                            <a href="?page=showmap&lat=<?=$map["lat"]?>&lon=<?=$map["lon"]?>&nom=<?=$map["nom"]?>&id=<?=$map["map_id"]?>" class="mapLink link-opacity-75 link-opacity-100-hover text-decoration-none fs-5"><?=$map["nom"]?></a>
                        </li>
                        <?php
                    }   
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
            include("inc/footer.php");
            ?>
<!--  Script Leaflet  -->
<script src=" https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<!-- Script BS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--  Script Perso  -->
<script src="scripts/colour-script.js"></script>
<script src="scripts/map-script.js"></script>
</body>
</html>