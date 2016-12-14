<?php

return [
    //是否运行, pre不需要运行
    'run' => true,
    'host' => 'api.hawk.qima-inc.com',
    'port' => 80,
    'uri' => '/monitor/push',
    //上报时间每60秒一次
    'time' => 60000,
];