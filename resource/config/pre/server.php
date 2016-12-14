<?php

return [
    'host' => '0.0.0.0',
    'port' => '8100',
    // swoole  配置
    'config' => [
        // worker 数量
        'worker_num' => 4,
        // 分发模式,不要改
        'dispatch_mode' => 3,
        // 最大请求数
        'max_request' => 100000,
        // reactor 数量
        'reactor_num' => 1,
        // 打开包长检测
        'open_length_check' => 1,
        // 长度值的类型，接受一个字符参数，与php的pack函数一致。目前swoole支持6种类型： N：无符号、网络字节序、4字节
        // http://wiki.swoole.com/wiki/page/463.html
        'package_length_type' => 'N',
        // 包头中第几个字节开始存放了长度字段 说明：配合open_length_check使用，用于指明长度字段的位置
        'package_length_offset' => 0,
        // 从第几个字节开始计算长度。https://github.com/LinkedDestiny/swoole-doc/blob/master/doc/01.swoole_server%E9%85%8D%E7%BD%AE%E9%80%89%E9%A1%B9.md#17package_body_offset
        // 说明：配合open_length_check使用，用于指明包头的长度
        'package_body_offset' => 0,
        // 废弃
        'open_nova_protocol' => 1,
        // 不要修改
        'package_max_length' => 200000,
    ],
    'monitor' => [
        // 最大请求数 (黑泽监控)
        'max_request' => 100000,             //
        // 运行多长时间,自动重启(黑泽监控)
        'max_live_time' => 1800000,          // 30m
        // 多少毫秒监控一次内存等的使用情况
        'check_interval' => 10000,           // 1s
        // 超过1.5G自动重启
        'memory_limit' => 1.5 * 1024 * 1024 * 1024,       // 1.5G
        // cpu 最大70 自动重启
        'cpu_limit' => 70
    ],
    'request_timeout' => 3000,  // 单位ms
    'hawk_collection' => [
        'enable_hawk' => 1, //是否开启监控采集 1开启，0不开启
        'hawk_url' => 'http://api.hawk.qima-inc.com/report',
    ],
];