<?php
spl_autoload_register(function ($path) {
    $path = str_replace('\\','/',$path);
    $path = $path.'.php';


    if (!file_exists($path)) {
        echo "file not found.";
        exit();
    }

    require_once $path;
});