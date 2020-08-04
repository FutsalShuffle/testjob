<?php
namespace App;
require_once('config.php');

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    include('views/index_v.php');
} else {
    http_response_code(404);
}

?>
