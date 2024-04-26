<?php



if(isset($_GET["page"])) {
    switch($_GET["page"]) {
        case "home" :
            $title = "Bienvenue à nouveau";
            include("../view/homeView.php");
            break;
        case "create" :
            $title = "Ajoute un lieu à la table";
            include("../view/createView.php");
            break;                
                // autre case ici si necessaire

        default :
            $title = "Page Introuvable";
            include("../view/error404View.php");         
    }
    }else if (isset($_GET["logout"])) {
        include_once("../model/logoutModel.php");
    }else {
        $title = "Bienvenue à mon Projet";
        include("../view/homeView.php");
    }