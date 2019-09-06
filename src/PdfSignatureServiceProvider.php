<?php

namespace Virtualorz\PdfSignature;

use Illuminate\Support\ServiceProvider;

class PdfSignatureServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('pdfSignature',function(){
            return new PdfSignature();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
