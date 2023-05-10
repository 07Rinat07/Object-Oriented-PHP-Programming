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

   public function __unset(string $name): void
   {
       print_r(1111111111111111111111);
   }
}