<?php
namespace application\models;

use \PDO;

class HomeModel extends Model
{
    public function selectList($category, $idx, $pageNo)
    {
        $sql = 'SELECT * FROM dd_posts ';
        //$sql = $sql.' WHERE idx = :idx';

        $stmt = $this->pdo->prepare($sql);

        //$stmt->bindValue(':idx', $idx, PDO::PARAM_INT);

        $stmt->execute();


        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }
}
