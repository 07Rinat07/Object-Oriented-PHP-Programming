<?php

namespace App;
class Worker
{
    public string $name;
    public int $age;
    public array $hours;

    public function work()
    {
        print_r('I am worker');
    }


}