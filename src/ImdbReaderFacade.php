<?php

namespace Techbizz\ImdbReader;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Techbizz\ImdbReader\ImdbReader
 */
class ImdbReaderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'imdbReader';
    }
}
