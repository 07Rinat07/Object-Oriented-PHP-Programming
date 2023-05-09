<?php
require_once ('../vendor/autoload.php');


$developer = new \App\Developer('vasya', 33, [5, 7, 10]);
$developer->setPosition('developer');
var_dump($developer->getPosition());

