<?php

namespace App;



class Designer extends Worker
{
    use HasRest;
   protected string $position = 'designer';

    public function work()
    {
       print_r('Designing');
    }
}