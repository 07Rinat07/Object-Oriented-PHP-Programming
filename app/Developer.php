<?php
namespace App;
class Developer extends Worker
{
    use HasRest;

    protected string $position = 'developer';

    public function work()
    {
        print_r('Developing');
    }

    public function __isset(string $name): bool
    {
        return true; // тут назначил того чего нет так что он возвращает что есть
    }
}