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

    public function searchMovie($expression)
    {
        $lang = "en";
        $params = "/en/API/SearchMovie/" . $this->apiKey . "/" . $expression;

        try {
//            return Http::acceptJson()->get($this->endpoint . $params);
            return json_decode(file_get_contents($this->endpoint . $params), true);
        } catch (\Exception $exception) {
            return abort(400, $exception->getMessage());
        }
        https://imdb-api.com/en/API/SearchMovie/k_1l3a2ym5/inception 2010
    }

    public function getMovie(Request $request)
    {
        if ($request->has('expression')) {
        }
    }
}
