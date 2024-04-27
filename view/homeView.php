<!-- 

Si je n'avais pas séparé les sections en "include", cette page ferait 800 lignes de code (HTML, PHP et Bootstrap) et non 50.

-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
    <div class="container-fluid px-5" id="timeToGo"> <!-- global container -->

    <?php
    $_SESSION['pageCount']++;
    if ($_SESSION["pageCount"] < 3) {
        include("inc/header.php");
    }else {
        include("inc/header-static.php");
    }
    ?>
    <div class="container h-25"> <!-- main container -->

    <?php
    if (isset($_GET["login"])){

     include("inc/form.php"); 
    }   else if (isset($errorMessage)) {
        ?>
            <p><?=$errorMessage?></p>
        <?php
    }else if (!isset($_SESSION["monID"]) || $_SESSION["monID"] != session_id()) {
        ?>
        <div class="text-center">
        <h3>Cliquez <a href="?login">ICI</a> pour vous connecter</h3>
        </div>
        <?php
    }

    ?>
    <?php
        include("inc/welcome-message.php");
    
    
