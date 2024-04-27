<?php


function getAllUsers (PDO $db) : array | string {

    $sql = "SELECT `username` as `nom`
            FROM `users`
            ORDER BY `username`";

try{
    $query = $db->query($sql);
    $result = $query->fetchAll();
    $query->closeCursor();
    return $result;
}catch(Exception) {
    $errorMessage = "Sorry, couldn't get user info";
    return $errorMessage;
}
}


function attemptUserLogin (PDO $db, $name, $pass) : bool | string {
    
    $sql = "SELECT *
            FROM `users`
            WHERE `username` = ?";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $name);

    try {
        $stmt->execute();
        if($stmt->rowCount()===0) return false;
        $result = $stmt->fetch();
        
        
        if (password_verify($pass, $result['password'])) {

            $_SESSION = $result;
            unset($_SESSION['password']);
            $_SESSION['monID'] = session_id();
            $_SESSION['pageCount'] = 1;
        
            return true;
            
        }
    }catch (Exception $e) {
        return $e->getMessage();
    }

    
}