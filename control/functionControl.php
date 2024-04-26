<?php
require_once("../model/loginModel.php");



$getUsers = getAllUsers ($db);


if (isset($_POST["userNameInp"], $_POST["userPassInp"])) {
    $login = attemptUserLogin($db, $_POST["userNameInp"], $_POST["userPassInp"]);
}