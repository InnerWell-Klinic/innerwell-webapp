<?php

use Illuminate\Support\Str;

return [

    'default' => env('DB_CONNECTION', 'mysql'),

    'connections' => [

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'mainline.proxy.rlwy.net'),
            'port' => env('DB_PORT', '33436'),
            'database' => env('DB_DATABASE', 'railway'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'mzdHyCepnWxbxqvVuxPaWiadKCLOZkzu'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_0900_ai_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
        ],

    ],

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

];
