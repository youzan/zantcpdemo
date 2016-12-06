<?php
/**
 * Created by IntelliJ IDEA.
 * User: Demon
 * Date: 16/6/22
 * Time: 下午3:10
 */

return [
    'trace' => [
        'engine'=> 'tcp',
        'host' => '127.0.0.1',
        'port' => '2280',
        'timeout' => 5000,
        'hasRecv' => false,
        'config'    => [
            'open_length_check' => 1,
            'package_length_type' => 'N',
            'package_length_offset' => 0,
            'package_body_offset' => 0,
            'open_nova_protocol' => 1
        ],
        'pool'  => [
            'maximum-connection-count' => 50,
            'minimum-connection-count' => 0,
            'heartbeat-time' => 35000,
            'init-connection'=> 0,
        ]
    ],
];
