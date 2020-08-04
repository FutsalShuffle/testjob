<?php
define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
include_once(DOC_ROOT_PATH . "db/db.php");
//include('..db/db.php');

function getPlaces(){
    $db = connect();
    $sql = "SELECT * FROM Places";
    $query = $db->prepare($sql);
    $query->execute();
    $resultSet = $query->get_result();

    //pull all results as an associative array
    $result = $resultSet->fetch_all();
    return $result;
}

?>