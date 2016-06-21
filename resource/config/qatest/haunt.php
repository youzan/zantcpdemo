<?php
/**
 * Created by PhpStorm.
 * User: xiaoniu
 * Date: 16/6/16
 * Time: 下午4:03
 */
return [
    'app_names' => [
        'TcpDemo'
    ],
    'discovery' => [
        'host' => 'etcd0-qa.s.qima-inc.com',
        'port' => 2379,
        'timeout' => 35000,
        'uri' => '/v2/keys',
        'protocol' => 'nova',
        'namespace' => 'com.youzan.service',
        'loop_time' => 1000,
    ],
    'watch' => [
        'host' => 'etcd0-qa.s.qima-inc.com',
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
        'timeout' => 10000,
        'protocol' => 'nova',
        'namespace' => 'com.youzan.service',
    ],
];