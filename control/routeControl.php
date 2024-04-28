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
                case "seetable" :
                    $title = "Ajoute un lieu à la table";
                    include("../view/adminView.php");
                    break;
                    case "refuse" :
                        $title = "Nice try, fool :p";
                        include("../view/refuseView.php");
                        break;
                        case "showmap" :
                            $title = "Voir la Carte";
                            include("../view/mapView.php");
                            break;                                          
                      
                        
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