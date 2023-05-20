<?php

namespace App;

class Speaker
{
    /**
     * @return string
     */
    public function sayHello(\Closure $func): string
    {
        return $func('Hello');
    }
}