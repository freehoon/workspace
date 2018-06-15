<?php
namespace application\libs;

class Application
{
    public function __construct()
    {
        new \application\controllers\BoardController();
    }
}