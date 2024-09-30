<?php

namespace App\Interfaces;

interface Translation {
    public function preparePayload(array $request);
    public function translate();
    public function parseResponse();
}