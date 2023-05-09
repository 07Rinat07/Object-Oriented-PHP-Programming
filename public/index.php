<?php
require_once ('../vendor/autoload.php');
$worker = new \App\Worker('vasya', 33, [5, 7, 10]);
$visitor = new \App\Visitor();

var_dump($worker);

