<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
         // Allow the web server to send the content-length header
        'addContentLengthHeader' => false,
        'determineRouteBeforeAppMiddleware' => false,

        //Database settings
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'username' => 'root',
            'password' => 'root',
            'name' => 'moncv',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
