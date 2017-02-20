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

    // 发布tcp demo服务
//    'novaApi' => [
//        'path'  => 'vendor/zanphp/novatcpdemo/gen-php',
//        'namespace' => 'Com\\Youzan\\NovaTcpDemo\\',
//    ],

    // 测试泛化
//    'novaApi' => [
//        'path'  => 'vendor/nova-service/generic-test/sdk/gen-php',
//        'namespace' => 'Com\\Youzan\\Nova\\',
//    ],

    // 测试 MeetReduceService
    'novaApi' => [
        'path'  => 'vendor/nova-service/generic-test/sdk/gen-php',
        'namespace' => 'Com\\Youzan\\Ump\\',
    ],

    'platform' => [
        'enable_report' => 0,
        'hawk_url' => 'http://192.168.66.240:8188',
        'report_interval' => 300
    ],
];
