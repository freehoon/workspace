<?php
namespace application\controllers;

class HomeController
{
    private $modelName = "\application\models";

    public function __construct($action, $catagory, $contentNo, $pageNo)
    {
        $this->$action($catagory, $contentNo, $pageNo);
    }

    public function index($catagory, $contentNo, $pageNo)
    {
        
    }
}