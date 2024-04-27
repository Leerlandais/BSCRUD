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


