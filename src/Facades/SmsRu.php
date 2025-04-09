<?php

namespace Back1ng\SmsRu\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method bool send(string $phone, string $text)
 */
class SmsRu extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'SmsRu';
    }

}
