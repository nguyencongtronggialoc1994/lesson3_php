<?php


class QuadraticEquation
{
public $a;
public $b;
public $c;
    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    function getA(){
        return $this->a;
    }
    function getB(){
        return $this->b;
    }
    function getC(){
        return $this->c;
    }
    function getDiscriminant(){
        return pow($this->b,2)-(4*$this->a*$this->c);
    }
    function getRoot1(){
        return (-$this->b+sqrt($this->getDiscriminant()))/(2*$this->a);
    }
    function getRoot2(){
        return (-$this->b-sqrt($this->getDiscriminant()))/(2*$this->a);
    }

}