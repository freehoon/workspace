<?php
namespace application\controllers;

class BoardController extends Controller
{
    public function index($category, $idx, $pageNo)
    {
        $model = new \application\models\BoardModel();
        $list = $model->selectList($category, $idx, $pageNo);

        require_once 'application/views/board/index.php';
    }

    public function writeView($category, $idx, $pageNo)
    {
        require_once 'application/views/board/write.php';
    }

    public function insertBoard($category, $idx, $pageNo)
    {

        $model = new \application\models\BoardModel();

        if (isset($_POST["submit_insert_board"])) {
            $model->insertBoard($_POST["title"], $_POST["content"]);
        }

        header('location:/board/index/');
    }
}
