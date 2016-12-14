<?php

return [
    'default' => [
        'engine'=> 'kVStore',
        'ip_list' => [
            '10.200.181.8:3000',
            '10.200.181.19:3000',
            '10.200.181.69:3000',
            '10.200.181.70:3000',
        ],
        'user' => '',
        'password' => '',
        'policy' => [
            'timeout' => 1000,
        ],
        'pool'  => [
            'keeping-sleep-time' => 10000,
            'init-connection'=> 10,
        ],
    ],
];