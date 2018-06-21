<?php
namespace application\models;

use \PDO;

class BoardModel extends Model
{
    public function selectList($category, $idx, $pageNo)
    {
        $sql = 'SELECT * FROM board ';
        //$sql = $sql.' WHERE idx = :idx';

        $stmt = $this->pdo->prepare($sql);

        //$stmt->bindValue(':idx', $idx, PDO::PARAM_INT);

        $stmt->execute();

        $result = array($stmt->rowCount(), $stmt->fetchAll(PDO::FETCH_OBJ));

        return $result;

    }

    public function insertBoard($title, $content)
    {
        try{
            $sql = 'INSERT INTO board (title, content, reg_date, edit_date)
                    VALUES (:title, :content, :reg_date, :edit_date)';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':content', $content, PDO::PARAM_STR);
            $stmt->bindValue(':reg_date', date("Y-m-d H:i:s"), PDO::PARAM_STR);
            $stmt->bindValue(':edit_date', date("Y-m-d H:i:s"), PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e){
            var_dump('글 등록 중 에러 발생 : '. $e->getMessage());
        }
    }
}
