<!--
Celui-ci est au cas où quelqu'un essaie d'accéder à une page qui nécessite que l'utilisateur soit connecté (ou encore, en cas de manipulation d'URL).
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/styles/style.css">
        <title><?=$title?></title>
    </head>
    <body>
        <div class="container mt-2 h-50">
        <?php
            include("inc/header.php")
        ?>
            <div class="row">
                <div class="col text-center">
                    <p class="h1 mt-5">Accès Refusé</p>
                    <p class="h3">Désolé, vous ne disposez pas des autorisations nécessaires pour accéder à cette page.</h3>
                    <p class="h4">Veuillez vous <a href="?login">connecter</a> pour continuer</p>
                </div>
            </div>
        </div>
        <?php
            include("inc/footer.php");
        ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="scripts/colour-script.js"></script>
</body>
</html>