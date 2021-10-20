<?php

namespace Techbizz\ImdbReader;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImdbReader
{
    private $apiKey;
    private $endpoint;

    public function __construct()
    {
        $this->apiKey = config('imdbReader.imdb_api_key');
        $this->endpoint = config('imdbReader.endpoint');
    }

    private function makeResponseMacro($data, $errors, $responseCode)
    {
        return response()->json([
            ['errors' => $errors],
            ['responseCode' => $responseCode],
            ['data' => $data]
        ]);
    }

    public function searchMovie($expression)
    {
        $lang = "en";
        $params = "/en/API/SearchMovie/" . $this->apiKey . "/" . $expression;
        try {
//            return Http::acceptJson()->get($this->endpoint . $params);
            $response = json_decode(file_get_contents($this->endpoint . $params), true);
            return $this->makeResponseMacro($response, false, 200);
        } catch (\Exception $exception) {
            return $this->makeResponseMacro($exception->getMessage(), true, 400);
        }
        https://imdb-api.com/en/API/SearchMovie/k_1l3a2ym5/inception 2010
    }

    public function getMovie(Request $request)
    {
        if ($request->has('expression')) {
        }
    }
}
