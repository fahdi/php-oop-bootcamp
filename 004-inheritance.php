<?php

class Shape
{

}

class Square extends Shape
{
    protected $length;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{
    protected $base = 4;
    protected $height = 10;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }

}

echo (new Triangle)->getArea();