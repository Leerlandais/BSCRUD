<?php
/*
C'était amusant. Auparavant, nous avions beaucoup de contrôle de routage fait à partir d'ici et très peu de dépendances à appeler.
Il faut faire attention à l'ordre ici !
*/

session_start();
    if (!isset($_SESSION["pageCount"])){
    $_SESSION['pageCount'] = 0;
    }

    
require_once("../config.php");
require_once("../control/dbConnectControl.php");
require_once('../model/locationModel.php');
require_once("../model/loginModel.php");
require_once('../control/functionControl.php');
require_once("../control/routeControl.php");


$db = null;
