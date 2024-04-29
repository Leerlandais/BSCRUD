<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
      
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <link rel="stylesheet" href="styles/style.css">
        <title><?=$title?></title>
    </head>
    <body>
        <div class="container-fluid px-5 mt-2 h-auto">
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
            
            <div class="col-9 ps-5">
                <div id="map"></div>
            </div>
            <div class="col-3">
                
                    <div class="container">
               
                    
                        <?php 
                         if (isset($_SESSION["monID"]) && $_SESSION["monID"] === session_id()) {
                            ?>
                    <div class="table-responsive">
                        <table class="table" data-toggle="table" data-show-columns="false" data-search="false" data-pagination="true">
                        <thead>
                                <tr>
                                    <th class="text-center bg-transparent">Choissisez votre destination</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($getMaps as $map) {
                                        ?>
                                    <tr>
                                        <td><a href="?page=showmap&lat=<?=$map["lat"]?>&lon=<?=$map["lon"]?>&nom=<?=$map["nom"]?>&id=<?=$map["map_id"]?>" class="mapLink link-opacity-75 link-opacity-100-hover text-decoration-none fs-5"><?=$map["nom"]?></a></td>
                                    <?php
                                    }
                                }
                                    ?>
                                    </tr>
                            </tbody>
                        </table>
                   
                    </div>
               
</div>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
    <script src="extensions/natural-sorting/bootstrap-table-natural-sorting.js"></script>
<!--  Script Perso  -->
<script src="scripts/colour-script.js"></script>
<script src="scripts/map-script.js"></script>
</body>
</html>