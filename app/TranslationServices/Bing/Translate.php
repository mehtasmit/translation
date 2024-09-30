<?php

namespace App\TranslationServices\Bing;

use App\Interfaces\Translation;

class Translate implements Translation {

    public function preparePayload($request) {}
    public function translate() {
        echo 'Bing Translate';
    }

    public function parseResponse()
    {
        echo 'Bing Translate Parse Response';
    }

}