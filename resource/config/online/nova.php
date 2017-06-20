<?php

return [
    // 发布服务
    "novaApi" => [
        "path" => "vendor/nova-service/nova-demo/sdk/gen-php",
        "namespace" => "Com\\Yourcompany\\Demo\\",
        "domain" => "com.test.service", // 与 registry中服务发布的namespace对应, 用来处理服务隔离
    ],
];
