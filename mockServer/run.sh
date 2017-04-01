#!/usr/bin/env bash
path=`pwd`
echo $path
case "$1" in
    start)
        echo "start mock server env"
        nohup ./syslog.php &
        nohup ./tcp.php &
    ;;
    stop)
        echo "stop server"
        syslog=$(ps -ef|grep 'php ./syslog.php'|grep -v "grep"|awk -F " " '{print $2}'|sort)
        kill -9 $syslog
        tcp=$(ps -ef|grep 'php ./tcp.php'|grep -v "grep"|awk -F " " '{print $2}'|sort)
        kill -9 $tcp
    ;;
    *)
    echo "invalid options"
    ;;
esac