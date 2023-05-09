<?php

namespace App;
class Worker
{
    public string $name;
    public int $age;
    public array $hours;

    /**
     * @param string $name
     * @param int $age
     * @param array $hours
     */
    public function __construct(string $name, int $age, array $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }


    public function work()
    {
        print_r('I am worker');
    }


}