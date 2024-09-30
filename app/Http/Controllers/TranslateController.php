<?php

namespace App\Http\Controllers;

use App\Interfaces\Translation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response as HttpResponse;

class TranslateController extends Controller
{
    public function translate(Request $request, Translation $translation)
    {
       
        try {
            $translation->preparePayload($request->all());
            $translation->translate();
            $translation->parseResponse();
        } catch(Exception $e) {
            Log::info('Exception in translation API', [
                'error' => $e->getMessage(),
            ]);

            return response()->json([
                'message' => 'Exception in translation API.',
            ], HttpResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
