<?php

interface Message {

    public function send($sText);
}

class SystemEmail implements Message {

    public function send($sText) {
        var_dump("Send message from SystemEmail: $sText");
    }

}

class NewMessage {

    public function sendNow($sText) {
        var_dump("Send message from NewMessage: $sText");
    }

}

class NewMessageAdapter implements Message {

    private $oNewMessage;

    public function __construct(NewMessage $oNewMessage) {
        $this->oNewMessage = $oNewMessage;
    }

    public function send($sText) {
        $this->oNewMessage->sendNow($sText);
    }

}

class Client {

    private $oMessage;

    public function __construct(Message $oMessage) {
        $this->oMessage = $oMessage;
    }

    public function sendMessage($sText) {
        $this->oMessage->send($sText);
    }

}

$oSystemEmail = new SystemEmail();
$oClientSystemEmail = new Client($oSystemEmail);
$oClientSystemEmail->sendMessage("First message");

$oNewMessage = new NewMessage();
$oNewMessageAdapter = new NewMessageAdapter($oNewMessage);
$oClientNewMessage = new Client($oNewMessageAdapter);
$oClientNewMessage->sendMessage("Second message");
