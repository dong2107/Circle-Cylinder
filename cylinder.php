<?php
class Cylinder extends Circle
{
    public $height;
    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getInt()
    {
        return parent::getArea() * $this->height;
    }
}
