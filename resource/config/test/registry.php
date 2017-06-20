<?php

return [
    "enable" => true,
    "type" => "etcd",
    // 配置从注册中心拉取的服务名称
    "app_names" => [ ],
    // 配置从注册中心拉取服务的协议(暂时只能是nova)与命名空间(域)
    "app_configs" => [ ],
    "etcd" => [
        "nodes" => [
            [
                "host" => "127.0.0.1",
                "port" => 2379,
            ]
        ],
    ],

    "haunt" => [

    ],
];