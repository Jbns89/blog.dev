<?php

// Anything that you want to be overwritten in the other app.php should be put in here.


return array(

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => true,
    
    // We need to add append_config so instead of overwriting the providers
    // we are just adding to the providers
    'provider' => append_config(array(
        'Way\Generators\GeneratorsServiceProvider',
        'Barryvdh\Debugbar\ServiceProvider'
        ))

);


