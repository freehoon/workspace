<?php
namespace application\libs;

class Application
{
//    private $controller;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        // echo "application 호출 성공";
        // application 의 가장 중요한 역활은 url routing 입니다.
        // url을 받으면 다음과 같은 방식으로 URL을 분석하여
        // 배엘에 저장을 하게 됩니다.

        $url = "";

        // 1. url이 있는지 확인 합니다.
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
        }

        // 2. URL을 분석합니다.
        $params = explode('/', $url);
        $counts = count($params);

        $param['menu']      = (!isset($params[0]) || $params[0] == '') ?  "home"  : $params[0];
        $param['action']    = (!isset($params[1]) || $params[1] == '') ?  "index" : $params[1];
        $param['catagory']  = (!isset($params[2]) || $params[2] == '') ?  "story" : $params[2];
        $param['contentNo'] = (!isset($params[3]) || $params[3] == '') ?  1 : $params[3];
        $param['pageNo']    = (!isset($params[4]) || $params[4] == '') ?  1 : $params[4];

        // 3. 해당 URL을 기준으로 controller를 호출합니다.
        $controllerName = '\application\controllers\\'.$param['menu'].'controller';
        new $controllerName($param['action'], $param['catagory'], $param['contentNo'], $param['pageNo']);
        //new \application\controllers\BoardController($param['action'], $param['catagory'], $param['contentNo'], $param['pageNo']);
    }
}