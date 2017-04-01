#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: marsnowxiao
 * Date: 2017/3/10
 * Time: 下午10:30
 */

$server = new swoole_server('0.0.0.0', 5140);

$server->on("receive", function ($server, $fd, $from_id, $data) {
    echo "received $data\n";
    $server->send($fd, "fake syslog server");
});

$server->start();