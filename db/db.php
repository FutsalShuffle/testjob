<?php

//шорткат для подключения к бд
function connect() {
    include_once('config.php');
    static $db;
    if ($db === null){
        $db = new mysqli($servername, $username, $password, $dbname);
    }
    return $db;
}

?>
