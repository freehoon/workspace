<?php
spl_autoload_register(function ($path) {
    $path = str_replace('\\','/',$path);

    $path = _ROOT . $path . '.php';

    if (file_exists($path)) {
        require_once $path;
    }else{
        echo "file not found."."<br>"."autoload URL : $path";
        exit();
    }
});