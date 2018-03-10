<?php

abstract class AbstractProduct {

    abstract function __clone();
}

class Fruit extends AbstractProduct {

    private $name;
    private $category;

    public function __construct() {
        $this->category = 'fruit';
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->category . ' ' . $this->name;
    }

    public function __clone() {
        
    }
}

$oProductApple = new Fruit();
$oProductApple->setName('Apple');
echo $oProductApple->getName();

$oProductPez = clone $oProductApple;
$oProductPez->setName('Pez');
echo $oProductPez->getName();
