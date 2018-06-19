<?php
namespace application\controllers;

class HomeController extends Controller
{
    public function index($category, $idx, $pageNo)
    {
        echo "home controller index() method <br>";


        $model = new \application\models\HomeModel();
        $list = $model->select($category, $idx, $pageNo);

        require_once 'application/views/home/index.php';

    }

    public function view($category, $idx, $pageNo)
    {
        echo "Home controller view() method <br>";
    }
}