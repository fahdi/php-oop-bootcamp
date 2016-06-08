<?php

abstract class Shape
{
    protected $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract protected function getArea();

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

class Circle extends Shape
{
    protected $radius = 4;

    public function getRadius()
    {
        return $this->radius;
    }

    public function getArea()
    {
        // M_PI
        return pi() * pow($this->radius, 2);
    }

}


echo (new Circle('blue'))->getArea();