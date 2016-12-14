<?php

return [
    'app_names' => [
    ],
    'discovery' => [
        'host' => '10.10.138.48',
        'port' => 2379,
        'timeout' => 30000,
        'uri' => '/v2/keys',
        'protocol' => 'nova',
        'namespace' => 'com.youzan.service',
        'loop_time' => 1000,
    ],
    'watch' => [
        'host' => '10.10.138.48',
        'port' => 2379,
        'timeout' => 30000,
        'uri' => '/v2/keys',
        'protocol' => 'nova',
        'namespace' => 'com.youzan.service',
        'loop_time' => 5000,
    ],
    'watch_store' => [
        'loop_time' => 1000,
    ],
    'register' => [
        'host' => '127.0.0.1',
        'port' => 8687,
        'uri' => '/register',
        'timeout' => 30000,
        'protocol' => 'nova',
        'namespace' => 'com.youzan.service',
    ],
    'unregister' => [
        'host' => '127.0.0.1',
        'port' => 8687,
        'uri' => '/unregister',
        'timeout' => 10000,
    ],
];