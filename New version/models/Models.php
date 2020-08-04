<?php
namespace App\Models;
use App\DB\DB;

class Models {
    public static $db;

    public function getAll($table){
        self::$db = DB::connect();
        $sql = "SELECT * FROM ". $table;
        $query = self::$db->prepare($sql);
        $query->execute();
        $resultSet = $query->get_result();
        $result = $resultSet->fetch_all();
        return $result;
    }
}

?>