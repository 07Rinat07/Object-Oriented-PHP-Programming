<?php
require_once ('../vendor/autoload.php');


$developer = new \App\Developer('Boris ', 20, [5, 6, 10]);
$designer = new \App\Designer('Elena ', 18, [5, 6, 10]);


$workers = [$designer, $developer];
//
//foreach ($workers as $worker)
//{
//    $worker->work();
//}

var_dump((string) $developer);




//Абстракция
// Инкапсуляция
// Наследование
//Полиморфизм



