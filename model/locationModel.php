<?php

// celui-ci contient toutes les fonctions liées à l'ajout, à la modification ou à la suppression des lieux (et à leur affichage, bien sûr)
// Pas besoin d'étiqueter les fonctions car leurs noms disent tout

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

function getOneItemById (PDO $db, $id) {
    $sql = 'SELECT `map_id` AS `id`,`map_name` AS `nom`, `map_desc` AS `desc`, `map_lat` AS `lat`, `map_lon` AS `lon`
            FROM `map`
            WHERE `map_id` = ?';

$stmt = $db->prepare($sql);
try {
    $stmt->execute([$id]);
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


function updateItemById (PDO $db, string $name, string $desc, float $lat, float $lon, int $id) : bool | string {
    $cleanedName = htmlspecialchars(strip_tags(trim($name)));
    $cleanedDesc = htmlspecialchars(strip_tags(trim($desc)));
    $cleanedLat = htmlspecialchars(strip_tags(trim($lat)));
    $cleanedLon = htmlspecialchars(strip_tags(trim($lon)));
    
    $sql = "UPDATE `map` 
            SET `map_name`= ?,
                `map_desc`= ?,
                `map_lat`= ?,
                `map_lon`= ?
                 WHERE `map_id` = ?";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $cleanedName);
    $stmt->bindValue(2, $cleanedDesc);
    $stmt->bindValue(3, (float) $cleanedLat);
    $stmt->bindValue(4, (float )$cleanedLon);
    $stmt->bindValue(5, $id, PDO::PARAM_INT);
    
    try {
        $stmt->execute();
        if($stmt->rowCount()===0) return false;
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
    
}