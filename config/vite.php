<?php

return [
    /*
     * The path to the Vite manifest file.
     */
    'manifest' => public_path('build/.vite/manifest.json'),

    /*
     * The path to the Vite development server.
     */
    'dev_server' => env('VITE_DEV_SERVER', 'http://localhost:3000'),

    /*
     * Specify if you want to use Vite's dev server.
     */
    'use_dev_server' => env('VITE_USE_DEV_SERVER', true),
];
