<?php

namespace App\TranslationServices\Google;

use App\Interfaces\Translation;

class Translate implements Translation {

    public function preparePayload($request) {}
    public function translate() {
        echo 'Google Translate';
    }

    public function parseResponse()
    {
        echo 'Google Translate Parse Response';
    }

}