<?php

interface ServiceInterface {

    public function collect();
}

class Package implements ServiceInterface {

    public function collect() {
        var_dump('Collect package');
    }

}

class Envelope implements ServiceInterface {

    public function collect() {
        var_dump('Collect envelope');
    }

}

class PostOffice {

    private $oStrategy;

    public function setStrategy(ServiceInterface $oStrategy) {
        $this->oStrategy = $oStrategy;
    }

    public function collect() {
        return $this->oStrategy->collect();
    }

}

$oPostOffice = new PostOffice();
$oPostOffice->setStrategy(new Package());
$oPostOffice->collect();
$oPostOffice->setStrategy(new Envelope());
$oPostOffice->collect();
