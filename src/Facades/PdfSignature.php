<?php

namespace Virtualorz\PdfSignature\Facades;

use Illuminate\Support\Facades\Facade;

class PdfSignature extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pdfSignature';
    }
}
