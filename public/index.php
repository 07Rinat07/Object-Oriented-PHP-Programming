<?php
require_once ('../vendor/autoload.php');


$developer = new \App\Developer('Boris ', 20, [5, 6, 10]);
$designer = new \App\Designer('Elena ', 18, [5, 6, 10]);


var_dump(get_class_methods('App\Developer'));
