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
        'worker_num'    => 2,
    ],
    'request_timeout'   => 50,
    'monitor' =>[
        'max_request'   => 100000,          //
        'max_live_time' => 1800000,         //30m
        'check_interval'=> 10000,           //1s
        'memory_limit'  => 1.5 * 1024 * 1024 * 1024,       //1.50G
        'cpu_limit'     => 70,
        'debug'         => false
    ],
    'request_timeout' => 30000,
];