<?php
namespace application\controllers;

class BoardController
{
    public function __construct()
    {
        echo "this is Board Controller __construct().<br>";

        $this->index();

    }

    public function index()//$catagory, $contentNo, $pageNo)
    {
        echo "this is Board Controller index method.<br>";
    }
}