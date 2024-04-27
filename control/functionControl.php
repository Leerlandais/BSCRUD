<?php
require_once("../model/loginModel.php");



$getUsers = getAllUsers ($db);
$getMaps = getAllMaps($db);


if (isset($_POST["userNameInp"], $_POST["userPassInp"])) {
    $login = attemptUserLogin($db, $_POST["userNameInp"], $_POST["userPassInp"]);
    if ($login === true) {
        if ($_SESSION["permission"] > 7) {
        header ("Location: ?page=seetable");
    }else {
        header ("Location: ?page=home&table=user");
    }
    }else {
        $errorMessage = "Saissisez correctement vos détails";
        header ("Location: ?login");
    }
}

if (isset($_GET["action"], $_GET["item"], $_GET["confirm"]) && ctype_digit($_GET["item"]) && $_GET["action"] === "delete" && $_GET["confirm"] === "ok") {
    $deleteItem = deleteItemFromMapByID ($db, $_GET["item"]);
    if($deleteItem === true) {
        header('Location: ?page=seetable');
    }
}


if (isset($_GET["action"], $_GET["item"]) && $_GET["action"] === "update" && ctype_digit($_GET["item"])) {
    $updateItem = getOneItemById ($db, $_GET["item"]);
    if($updateItem === true) {
        header('Location: ?page=seetable&action=update');
    }
}


if (isset($_POST["itemNameInp"],$_POST["itemDescInp"],$_POST["itemLatInp"],$_POST["itemLonInp"])) {
    
    $insertItem = addItemToMap($db, $_POST["itemNameInp"],$_POST["itemDescInp"], (float) $_POST["itemLatInp"],(float) $_POST["itemLonInp"]);
    if ($insertItem === true){
    header('Location: ?page=seetable');
}
}

if (isset($_GET["action"], $_GET["item"]) && $_GET["action"] === "delete" && ctype_digit($_GET["item"])) {
$mapDelete = getOneItemById($db,$_GET["item"]);
}

if (isset($_POST["updateNameInp"],$_POST["updateDescInp"],$_POST["updateLatInp"],$_POST["updateLonInp"])) {
    
    $updateItemById = updateItemById($db, $_POST["updateNameInp"],$_POST["updateDescInp"], (float) $_POST["updateLatInp"],(float) $_POST["updateLonInp"],(int) $_GET["item"]);
    if ($updateItemById === true){
    header('Location: ?page=seetable');
}
}