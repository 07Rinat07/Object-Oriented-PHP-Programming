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

   public function __destruct()
   {
       print_r(111111111);
   }
}