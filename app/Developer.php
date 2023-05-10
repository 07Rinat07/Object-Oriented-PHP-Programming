<?php

namespace App;


class Developer extends Worker
{
    use HasRest;

    protected string $position = 'developer';
    private array $attributes;

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function work()
    {
        print_r('Developing');
    }

    public function __get(string $name)
    {
        if (isset($this->attributes[$name]))
        {
            return null;
        }
    }

    public function __set(string $name, $value): void
    {
       $this->attributes[$name] = $value;
    }
}