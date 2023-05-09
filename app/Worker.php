<?php

namespace App;
class Worker
{
    private string $name;
    private int $age;
    private array $hours;

    private string $position;
    private int $experience;

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

    public function setPosition($value)
    {
        $this->position = $value;
    }

    public function getPosition(): string
    {
        return $this->position;
    }
}