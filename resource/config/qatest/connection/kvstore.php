<?php
/**
 * Created by PhpStorm.
 * User: caichengxiang
 * Date: 16/9/3
 * Time: 下午2:28
 */

return [
    'default' => [
        'engine'=> 'KvStore',
        //ip列表，将会对每一个建立链接
        'ip_list' => [
            '10.215.20.8:3000',
        ],
        'user' => '',
        'password' => '',
        'policy' => [
            'timeout' => 1000,
        ],
        'pool'  => [
            'keeping-sleep-time' => 10000,
            'init-connection'=> 1,
        ],
    ],
];
