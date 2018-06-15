<?php
namespace application\controllers;

class BoardController
{
    public function __construct($action, $catagory, $contentNo, $pageNo)
    {
        echo "Board Controller.<br>";

        $this->$action($catagory, $contentNo, $pageNo);

    }

    public function index($catagory, $contentNo, $pageNo)
    {
        echo "index() method <br>catagory : $catagory , contentNo : $contentNo, pageNo: $pageNo";
    }

    public function write($catagory, $contentNo, $pageNo)
    {
        echo "write() method <br>catagory : $catagory , contentNo : $contentNo, pageNo: $pageNo";
    }

    public function view($catagory, $contentNo, $pageNo)
    {
        echo "view() method <br>catagory : $catagory , contentNo : $contentNo, pageNo: $pageNo";
    }

    public function edit($catagory, $contentNo, $pageNo)
    {
        echo "edit() method <br>catagory : $catagory , contentNo : $contentNo, pageNo: $pageNo";
    }

    public function delete($catagory, $contentNo, $pageNo)
    {
        echo "delete() method <br>catagory : $catagory , contentNo : $contentNo, pageNo: $pageNo";
    }
}