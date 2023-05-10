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

  public function __serialize(): array
  {
      return  [
          'sdhfhfhf' => 'ffffffffgggggg' //прописываем сценарий какие атрибуты должны тут сохранится

      ];
  }
}