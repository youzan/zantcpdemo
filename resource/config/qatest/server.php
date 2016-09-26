<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/16
 * Time: 19:33
 */

return [
    'host'          => '0.0.0.0',
    'port'          => '8020',
    'config' => [
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
    'monitor' =>[
        'max_request'   => 100000,            //
        'max_live_time' => 1800000,         //30m
        'check_interval'=> 10000,           //1s
        'memory_limit'  => 1.5 * 1024 * 1024 * 1024,       //1.50G
        'cpu_limit'     => 70,
        'debug'         => false
    ],
    'hawk_collection' => [
        'enable_hawk' => 0,
        'collect_listen_host' => '127.0.0.1',
        'collect_listen_port' => 8181
    ],
];
