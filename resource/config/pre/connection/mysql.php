<?php

return [
    'scrm'         => [
        'engine'   => 'mysqli',
        'host'     => '10.200.175.190',
        'user'     => 'user_crm',
        'password' => 'ZX4RlRFRewA16GTFL8BO',
        'database' => 'crm',
        'charset'  => 'utf8mb4',
        'port'     => '3012',
        'pool'     => [
            'maximum-connection-count' => 50,
            'minimum-connection-count' => 15,
            'heartbeat-time'           => 35000,
            'init-connection'          => 3,
        ],
    ],
    'scrm-cluster' => [
        'engine'   => 'mysqli',
        'host'     => '10.200.175.221',
        'user'     => 'user_scrm',
        'password' => 'PHXqlyog5vHFp3L3N4Yw',
        'database' => 'scrm',
        'charset'  => 'utf8mb4',
        'port'     => '3306',
        'pool'     => [
            'maximum-connection-count' => 50,
            'minimum-connection-count' => 15,
            'heartbeat-time'           => 35000,
            'init-connection'          => 3,
        ],
    ],
];