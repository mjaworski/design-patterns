<?php

class Document {

    public function save($sText) {
        var_dump('Save ' . $sText);
    }

}

class User {

    private $oDocument;

    public function __construct(Document $oDocument) {
        $this->oDocument = $oDocument;
    }

    public function save() {
        $this->oDocument->save('Some user');
    }

}

$oDocument = new Document();
$oUser = new User($oDocument);
$oUser->save();
