<?php
//Определяем директорию 
define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
include_once(DOC_ROOT_PATH . "db/db.php");
//include('..db/db.php');

function getPlaces(){
    //Все филиалы
    $db = connect();
    $sql = "SELECT * FROM Places";
    $query = $db->prepare($sql);
    $query->execute();
    $resultSet = $query->get_result();

    $result = $resultSet->fetch_all();
    return $result;
}

?>