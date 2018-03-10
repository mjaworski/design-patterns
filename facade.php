<?php

class Account {

    public function getClientBalance() {
        var_dump('get client balance');
    }
}

class Email {

    public function sendToUser() {
        var_dump('send to user');
    }
}

class ApiFacade {

    private $aAcount;
    private $oEmail;

    public function __construct() {
        $this->aAcount = new Account();
        $this->oEmail = new Email();
    }

    public function getBalance() {
        $this->aAcount->getClientBalance();
    }

    public function sendEmail() {
        $this->oEmail->sendToUser();
    }
}

$api = new ApiFacade();
$api->getBalance();
$api->sendEmail();
