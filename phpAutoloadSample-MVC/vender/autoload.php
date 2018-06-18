<?php
spl_autoload_register(function ($path) {
    $isController = explode('\\', $path);
    print_r('<pre>');
    print_r($isController);
    print_r('</pre>');
    $path = str_replace('\\','/',$path);

    $path = _ROOT . $path.'.php';

    echo "====> path : $path".'<br>';

    if (file_exists($path)) {
        require_once $path;
    }else{
        echo "file not found."."<br>"."autoload URL : $path";
        exit();
    }
});