<?php

class Mother
{

    public function getEyeCount()
    {
        return 2;
    }

}

class Child extends Mother
{


}

var_dump((new Child())->getEyeCount());
