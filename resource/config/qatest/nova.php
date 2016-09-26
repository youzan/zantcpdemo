<?php

return [
    'server' => [
        'daemonize' => 0,
        'worker_num' => 2,
        'max_request' => 100000,
        'reactor_num' => 2,
        'open_length_check' => 1,
        'package_length_type' => 'N',
        'package_length_offset' => 0,
        'package_body_offset' => 0,
        'open_nova_protocol' => 1,
        'package_max_length' => 2000000
    ],
    'novaApi' => [
        'path'  => 'vendor/zanphp/novatcpdemo/gen-php',
        'namespace' => 'Com\\Youzan\\NovaTcpDemo\\',
    ],

    'platform' => [
        'collect_listen_host' => '127.0.0.1',
        'collect_listen_port' => 8181
    ],
];
