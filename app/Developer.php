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

    public function __unserialize(array $data): void
    {
        var_dump($data);
    }
}