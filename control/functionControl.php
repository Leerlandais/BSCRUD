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