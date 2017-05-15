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
    // 发布Demo测试服务
    'novaApi' => [
        'path'  => 'vendor/nova-service/nova-demo/sdk/gen-php',
        'namespace' => 'Com\\Youzan\\Demo\\'
    ]
];
