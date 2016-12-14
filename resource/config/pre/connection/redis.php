<?php

return [
    'codis' => [
        'engine'=> 'redis',
        'host' => '127.0.0.1',
        'port' => 6602,
        'pool'  => [
            'maximum-connection-count' => 50,
            'minimum-connection-count' => 10,
            'maximum-wait-connection' => 50,
            'keeping-sleep-time' => 10,
            'init-connection'=> 2,
        ],
    ],
    'uuid' => [
        'engine'=> 'redis',
        'host' => '10.200.175.90',
        'port' => 6379,
        'pool'  => [
            'maximum-connection-count' => 50,
            'maximum-wait-connection' => 100,
            'minimum-connection-count' => 10,
            'keeping-sleep-time' => 10,
            'init-connection'=> 2,
        ],
    ]
];
