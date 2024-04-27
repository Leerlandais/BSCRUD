<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
    
<?php
    $_SESSION['pageCount']++;
    if ($_SESSION["pageCount"] < 3) {
        include("inc/header.php");
    }else {
        include("inc/header-static.php");
    }

    if (!isset($_SESSION["monID"]) || $_SESSION["monID"] != session_id()) {
        header ("Location: ?page=refuse");
        exit();
    }
    ?>
    
    <div class="container">

    <p class="h2">Ajouter un Lieu</p>
        <p>FORM D'INSERTION ICI</p>


    </div>

    <?php

        include("inc/footer.php");
    ?>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="scripts/script.js"></script>
</body>
</html>








