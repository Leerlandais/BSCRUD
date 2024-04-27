<?php

function getAllMaps(PDO $db) {
    $sql = "SELECT `map_id`,`map_name` AS `nom`,`map_desc` AS `desc`, `map_lat` AS `lat`, `map_lon` AS `lon` 
            FROM `map` 
            ORDER BY `map_id`";

try{
    $query = $db->query($sql);
    $result = $query->fetchAll();
    $query->closeCursor();
    return $result;
}catch(Exception) {
    $errorMessage = "Sorry, couldn't get map info";
    return $errorMessage;
}
}


function deleteItemFromMapByID(PDO $db, int $item) : bool | string {
    $sql = "DELETE FROM `map`
            WHERE `map_id` = ?";
    
    $stmt = $db->prepare($sql);
    try{
        $stmt->execute([$item]);
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function getItemForUpdate(PDO $db, int $item) : bool | string {
    $sql = 'SELECT *
            FROM `map`
            WHERE `map_id` = ?';
    
    try{
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $item);
    $result = $stmt->fetch(); 
    return $result;
    }catch(Exception $e) {
        return $e->getMessage();
    }

}

function addItemToMap (PDO $db, string $name, string $desc, float $lat, float $lon) : bool | string {
    $cleanedName = htmlspecialchars(strip_tags(trim($name)));
    $cleanedDesc = htmlspecialchars(strip_tags(trim($desc)));
    $cleanedLat = htmlspecialchars(strip_tags(trim($lat)));
    $cleanedLon = htmlspecialchars(strip_tags(trim($lon)));

    $sql = "INSERT INTO `map`(`map_name`, `map_desc`, `map_lat`, `map_lon`) 
            VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $cleanedName);
    $stmt->bindValue(2, $cleanedDesc);
    $stmt->bindValue(3, $cleanedLat);
    $stmt->bindValue(4, $cleanedLon);

    try {
        $stmt->execute();
        if($stmt->rowCount()===0) return false;
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }

}
