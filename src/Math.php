<?php

namespace UniversalCoders;

class Math
{
    public static function add($arg_num)
    {
        return array_sum(func_get_args());
    }

}

$math = new Math();

echo Math::add(1,2,3,4);