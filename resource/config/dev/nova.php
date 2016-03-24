<?php

return [
    'client' => [
        'host' => '127.0.0.1',
        'port' => '8020',
        'timeout' => 5000,
        'persistent' => true,
        'config'    => [
            'open_length_check' => 1,
            'package_length_type' => 'N',
            'package_length_offset' => 0,
            'package_body_offset' => 0,
            'open_nova_protocol' => 1
        ],
    ],
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
        'module' => '',
        'enable_register' => 0,
        'haunt_url' => 'http://192.168.66.237:8687',
        'enable_report' => 0,
        'hawk_url' => 'http://192.168.66.240:8188',
        'report_interval' => 300
    ],



];
