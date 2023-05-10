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

    public function __wakeup(): void
    {
       print_r(1234897512155);
    }
}