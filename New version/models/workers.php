<?php
namespace App\Models;
#include_once(DOC_ROOT_PATH . "db/db.php");
use App\DB\DB;

class Workers extends Models{
    public function getWorkersByPlaceOrdered($place){
        //Получаем работников по месту работы
        self::$db = DB::connect();
        $sql = "SELECT * FROM Workers WHERE place_id LIKE $place ORDER BY workername";
        $query = self::$db->prepare($sql);
        $query->execute();
        $resultSet = $query->get_result();
        $result = $resultSet->fetch_all();
        return $result;
    }
}
?>