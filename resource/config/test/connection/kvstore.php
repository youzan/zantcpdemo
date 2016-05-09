<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/5
 * Time: 下午4:53
 */
return [
    'test' => [
        'engine'=> 'kVStore',
        'pool'  => [
            'pool_name' => 'test',
            'keeping-sleep-time' => 10000,
            'init-connection'=> 1,
            'ip_list' => '192.168.66.202:3000',
            'user' => '',
            'password' => '',
            'policy' => [
                'timeout' => 1000,
            ],
        ],
    ],
];