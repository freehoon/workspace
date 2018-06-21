<?php
require_once 'vender/autoload.php';

$sayHello = new Hello();
$sayHello->say();

echo '<br>';

$task01 = new Task01();
$task01->todoTask();
