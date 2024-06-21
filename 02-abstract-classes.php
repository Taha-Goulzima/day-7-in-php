<?php
abstract class Shape{
    protected $name;

    //abstract method
    abstract public function calculateArea();

    public function __construct($name){
        $this->name = $name;
    }

    //concrete method
    public function getName(){
        return $this->name;
    }
}

class Circle extends Shape{
    private $radius;

    public function __construct($name,$radius){
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi()* pow($this->radius,2);
    }
}

$circle = new Circle("Circle",4);
var_dump($circle);

?>