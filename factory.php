<?php

interface NoticeInterface {

    public function show();
}

class NoticeWarning implements NoticeInterface {

    public function show() {
        var_dump('Alert');
    }

}

class NoticeInfo implements NoticeInterface {

    public function show() {
        var_dump('Info');
    }

}

class Factory {

    public static function create($sType) {
        if (class_exists($sType)) {
            return new $sType();
        } else {
            throw new Exception("Invalid message type");
        }
    }

}

$oNoticeWarning = Factory::create('NoticeWarning');
$oNoticeWarning->show();

$oNoticeInfo = Factory::create('NoticeInfo');
$oNoticeInfo->show();
