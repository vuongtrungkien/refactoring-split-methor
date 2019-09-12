<?php

class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getArea($radius);
        $perimeter = $this->getPerimeter($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }


    public function getPerimeter($radius)
    {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }


    public function getArea($radius)
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }
}