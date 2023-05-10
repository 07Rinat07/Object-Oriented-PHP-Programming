<?php

namespace App;


class Developer extends Worker
{
    use HasRest;

    protected string $position = 'developer';
    private array $attributes;

    public function work()
    {
        print_r('Developing');
    }

    public static function __callStatic($name, array $arguments)
    {
        print_r($name);
    }
}