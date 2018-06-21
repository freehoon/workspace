<?php
spl_autoload_register(function ($class){
    $class = str_replace('\\', '/', $class);
    echo '<h3>class path : '. $class.'</h3>';
    //exit();
    require_once $class.'.php';
});
