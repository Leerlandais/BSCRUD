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
   // if(isset($_SESSION)) var_dump($_SESSION);
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
    if (isset($_SESSION["permission"]) && $_SESSION["permission"] > 7) {
        include("inc/admin-table.php");
    }else {
        include("inc/table.php");
    }
    ?>


    </div> <!-- end main container -->
           
        <?php
        include("inc/footer.php");
        ?>
    
</div>  <!-- end global container -->
<!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="scripts/script.js"></script>
</body>
</html>