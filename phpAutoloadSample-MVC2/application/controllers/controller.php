<?php
namespace application\controllers;

class Controller
{
    public function __construct($menu, $action, $category, $idx, $pageNo)
    {
        //echo "컨트롤러 생성자 입니다.<br>";

        //생성자에서 할일
        // 모델 파일이 존재 하는지 확인

        if (!file_exists(_ROOT.'/application/models/'.$menu.'Model.php')) {

            var_dump('Model Class not found.(application/models/'.$menu.'Model.php)');
            exit();
        }

        $this->$action($category, $idx, $pageNo);
    }
}