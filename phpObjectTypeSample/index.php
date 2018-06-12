<?php
class application
{
    var $param;

    function __construct()
    {
        $this->getParam();

        //echo $this->param->color;
        //echo $this->param->page_type;
        //echo $this->param->userid;

        new $this->param->page_type($this->param);
        
    }

    function getParam()
    {
        $params['page_type'] = 'main';
        $params['userid'] = 'foo';
        $params['color'] = 'blue';

        $this->param = (object)$params;
        // object type 으로 값을 할당하면 아래 주석과 같이
        // 객체의 맴버 변수에 접근하는 것과 같이 사용할 수 있다.
        //echo $this->param->userid;
    }
}


new application();