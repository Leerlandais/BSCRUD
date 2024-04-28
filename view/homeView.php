<!-- 

Si je n'avais pas séparé les sections en "include", cette page ferait 800 lignes de code (HTML, PHP et Bootstrap) et non 50.

-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
    <div class="container-fluid px-5 text-center" id="timeToGo"> <!-- global container -->

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
        if (!isset($_SESSION["monID"]) || $_SESSION["monID"] !== session_id()) {
            include("inc/welcome-message.php");
        }else if (isset($_SESSION["permission"]) && $_SESSION["permission"] < 8){
            include("inc/table.php");
        } 
        ?>
        <?php   
        if (isset($_SESSION["permission"]) && $_SESSION["permission"] > 7) {
            include("inc/admin-table.php");
        }
        ?>
    
    
        </div> <!-- end main container -->
    
            <?php
            include("inc/footer.php");
            ?>
    
    
    </div>  <!-- end global container -->
    
    <!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts --><!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
    
        <script src="scripts/colour-script.js"></script>
        <script src="scripts/checkbox-script.js"></script>
    </body>
    </html
