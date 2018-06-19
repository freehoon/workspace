<?php
namespace application\controllers;

class BoardController extends Controller
{
    public function index($category, $idx, $pageNo)
    {
        echo "Board controller index method <br>";

        $model = new \application\models\HomeModel();
        $list = $model->select($category, $idx, $pageNo);

        require_once 'application/views/board/index.php';
    }

    public function view($category, $idx, $pageNo)
    {
        echo "Board controller view() method <br>";
    }
}