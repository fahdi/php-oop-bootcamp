<?php

namespace UniversalCoders;

class Math
{
    public function add($arg_num)
    {
        return array_sum(func_get_args());
    }

}

$math = new Math();

var_dump($math->add(1, 2, 3, 4));