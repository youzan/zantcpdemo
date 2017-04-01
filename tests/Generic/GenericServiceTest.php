<?php
/**
 * Created by PhpStorm.
 * User: marsnowxiao
 * Date: 2017/3/10
 * Time: 下午7:13
 */
namespace Com\Youzan\Tcpdemo\Tests\Generic;

use Com\Youzan\Nova\Framework\Generic\Php\Service\GenericTestService;
use Kdt\Iron\NSQ\Foundation\Timer;
use Zan\Framework\Foundation\Coroutine\Task;
use Zan\Framework\Network\Connection\ConnectionInitiator;

use Zan\Framework\Network\Connection\NovaClientConnectionManager;
use Zan\Framework\Testing\TaskTest;

class GenericServiceTest extends \PHPUnit_Framework_TestCase {
    public $service;
    public function setUp()
    {
        $appName = "test-client";
        $servers = [
            [
                "protocol" => "nova",
                "namespace" => "",
                "app_name" => $appName,
                "services" => [
                    [
                        "service" =>
                            "com.youzan.nova.framework.generic.php.service.GenericTestService",
                    ]
                ],
                "methods" => [
                    "returnList",
                ],
                "host" => "127.0.0.1",
                "port" => 8051,
                "weight" => 100,
                "server" => "mock server",
            ]
        ];

        NovaClientConnectionManager::getInstance()->work($appName, $servers);
    }

    public function returnList()
    {
        $func = function () {
            $response = (yield $this->service->returnList());
            var_dump($response);
        };
        $coroutine =  $func();
        Task::execute($coroutine);
    }

    public function testReturnList()
    {
        var_dump("test start....");

        $this->service = new GenericTestService();

        Timer::after(300, [$this, "returnList"]);

    }
}
