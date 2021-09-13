<?php

class Animal
{
    private bool $isMale;
    public $name;
    protected $color;

    public function _construct($name, $isMale, $color)
    {
        $this->name = $name;
        $this->isMale = $isMale;
        $this->color = $color;
    }
}

class Cat extends Animal
{
    public function getColor()
    {
        return $this->color;
    }
    public function getIsMale()
    {
        return $this->isMale;
    }
}

trait HasLegs
{
    public $nLegs;
    public function setLegs($n)
    {
        $this->$nLegs = $n;
    }
    public function walk()
    {    
        if($this->$nLegs <= 0)
        {
            echo "Don't have legs to pray";
        }
        elseif($nLegs === 1)
        {
            echo "(Hopping intesifies)";
        }
        else
        {
            echo "Leg master race";
        }
    }
}

$animal1 = new Cat("Nuustik", false, "black/white");

$animal1->nLegs = 4;
$animal1->walk();

var_dump($animal1);

?>