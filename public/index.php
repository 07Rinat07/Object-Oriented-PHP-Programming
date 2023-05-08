<?php
require_once ('../vendor/autoload.php');
$worker = new \App\Worker();
$visitor = new \App\Visitor();

$visitor->visit();

