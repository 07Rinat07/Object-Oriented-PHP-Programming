<?php
require_once ('../vendor/autoload.php');


$developer = new \App\Developer('Boris ', 20, [5, 6, 10]);
$designer = new \App\Designer('Elena ', 18, [5, 6, 10]);

// $developer = null; тут убил велопера и цикл остановлен обьект уничтожен

$workers = [$designer, $developer];
//
//foreach ($workers as $worker)
//{
//    $worker->work();
//}






//Абстракция
// Инкапсуляция
// Наследование
//Полиморфизм



