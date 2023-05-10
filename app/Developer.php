<?php

namespace App;
class Developer extends Worker
{
    use HasRest;

    protected string $position = 'developer';

    public string $sone;

    public function work()
    {
        print_r('Developing');
    }

}