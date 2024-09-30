<?php

namespace App\TranslationServices\Libre;

use App\Interfaces\Translation;
use Illuminate\Support\Facades\Http;

class Translate implements Translation {

    protected $apiUrl = 'https://libretranslate.com/translate';

    protected $payload = [];

    public function preparePayload($request) {
        $this->payload = [
            'q'=> $request['text'],
            'from'=> $request['from'],
            'to'=> $request['to'],
        ];


    }
    public function translate() {

        $response = Http::post($this->apiUrl, $this->payload);
        dd($response);

        
    }

    public function parseResponse()
    {
        echo 'Libre Translate Parse Response';
    }

}