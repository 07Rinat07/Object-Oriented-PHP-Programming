<?php
require_once ('../vendor/autoload.php');


$developer = new \App\Developer('Boris ', 20, [5, 6, 10]);
$designer = new \App\Designer('Elena ', 18, [5, 6, 10]);


var_dump(property_exists('App\Developer', 'name')); //усли в классе воркера публичный нейм поставить то получу true
