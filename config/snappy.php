<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Snappy PDF / Image Configuration
    |--------------------------------------------------------------------------
    |
    | This option contains settings for PDF generation.
    |
    | Enabled:
    |
    |    Whether to load PDF / Image generation.
    |
    | Binary:
    |
    |    The file path of the wkhtmltopdf / wkhtmltoimage executable.
    |
    | Timeout:
    |
    |    The amount of time to wait (in seconds) before PDF / Image generation is stopped.
    |    Setting this to false disables the timeout (unlimited processing time).
    |
    | Options:
    |
    |    The wkhtmltopdf command options. These are passed directly to wkhtmltopdf.
    |    See https://wkhtmltopdf.org/usage/wkhtmltopdf.txt for all options.
    |
    | Env:
    |
    |    The environment variables to set while running the wkhtmltopdf process.
    |
    */

    'pdf' => [
        'enabled' => true,
        //'binary'  => env('WKHTML_PDF_BINARY', '/usr/local/bin/wkhtmltopdf'),
        'binary'  => env('WKHTML_PDF_BINARY', '"C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf"'),
      //  'binary' => base_path('vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64'),
      //  'binary' => base_path('vendor/wemersonjanuario/wkhtmltopdf-windows/bin/64bit/wkhtmltopdf'),
        'timeout' => false,
        'options' => [
            'enable-local-file-access' => true,
            'encoding'                 => 'UTF-8',
            'enable-javascript'        => true,
            'javascript-delay'         => 5000,
            'enable-smart-shrinking'   => true,
            'no-stop-slow-scripts'     => true,
            'keep-relative-links'      => true,
        ],
        'env'     => [],
    ],

    'image' => [
        'enabled' => true,
      //  'binary'  => env('WKHTML_IMG_BINARY', '/usr/local/bin/wkhtmltoimage'),
        'binary'  => env('WKHTML_IMG_BINARY', '"C:\Program Files\wkhtmltopdf\bin\wkhtmltoimage"'),
      //  'binary'  => 'vendor/h4cc/wkhtmltoimage-amd64/bin/wkhtmltoimage-amd64',
      //  'binary' => base_path('vendor/wemersonjanuario/wkhtmltopdf-windows/bin/64bit/wkhtmltoimage'),
        'timeout' => false,
        'options' => [
            'enable-local-file-access' => true,
            'encoding'                 => 'UTF-8',
            'enable-javascript'        => true,
            'javascript-delay'         => 5000,
            'enable-smart-shrinking'   => true,
            'no-stop-slow-scripts'     => true,
            'keep-relative-links'      => true,
            'page-size'                => 'A4',
         //   'images'                   => true,
         //   'lowquality'               => false,
            //'run-script'               => 'window.setTimeout(function(){window.status="ready";},5000);',
            'window-status'            => 'ready',
        ],
        'env'     => [],
    ],

];
