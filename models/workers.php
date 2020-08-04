<?php

include_once(DOC_ROOT_PATH . "db/db.php");

function getWorkers(){
    // Получаем всех работников (вряд ли используется)
    $db = connect();
    $sql = "SELECT * FROM Workers";
    $query = $db->prepare($sql);
    $query->execute();
    $resultSet = $query->get_result();
    $result = $resultSet->fetch_all();
    return $result;
}

function getWorkersByPlace($place){
    //Получаем работников по месту работы
    $db = connect();
    $sql = "SELECT * FROM Workers WHERE place_id LIKE $place ORDER BY workername";
    $query = $db->prepare($sql);
    $query->execute();
    $resultSet = $query->get_result();


    $result = $resultSet->fetch_all();
    return $result;
}

?>