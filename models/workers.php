<?php

include_once(DOC_ROOT_PATH . "db/db.php");

function getWorkers(){
    $db = connect();
    $sql = "SELECT * FROM Workers";
    $query = $db->prepare($sql);
    $query->execute();
    $resultSet = $query->get_result();

    //pull all results as an associative array
    $result = $resultSet->fetch_all();
    return $result;
}

function getWorkersByPlace($place){
    $db = connect();
    $sql = "SELECT * FROM Workers WHERE place_id LIKE $place ORDER BY workername";
    $query = $db->prepare($sql);
    $query->execute();
    $resultSet = $query->get_result();

    //pull all results as an associative array
    $result = $resultSet->fetch_all();
    return $result;
}

?>