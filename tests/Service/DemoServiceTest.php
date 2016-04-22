<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/21
 * Time: 11:29
 */

namespace Com\Youzan\Tcpdemo\Tests\Service;


use Com\Youzan\NovaTcpDemo\Entity\Demo;
use Com\Youzan\NovaTcpDemo\Service\DemoService;
use Zan\Framework\Foundation\Core\Config;
use Zan\Framework\Network\Connection\ConnectionInitiator;
use Zan\Framework\Testing\TaskTest;

class DemoServiceTest extends TaskTest {
    public function initTask()
    {
        ConnectionInitiator::getInstance()->init(Config::get('connection'));
        return parent::initTask();
    }

    public function taskEchoBackWork()
    {
        $service = new DemoService();
        $result = (yield $service->echoBack('hello'));
        $result = (yield $service->echoBack($result));
        $result = (yield $service->echoBack($result));
        $result = (yield $service->echoBack($result));
        $result = (yield $service->echoBack($result));
        $result = (yield $service->echoBack($result));
        $result = (yield $service->echoBack($result));

        $this->assertEquals('hello', $result, 'DemoService.echoBack rpc call failed');
    }

    public function taskHelloWork()
    {
        $service = new DemoService();
        $result = (yield $service->hello('demo'));

        $this->assertTrue(is_a($result,Demo::class,'DemoService.hello return invalid demo entity'));
        $this->assertEquals('demo',$result->name, 'DemoService.hello return demo.name failed');
    }

    public function taskReturnEmptyArrayWork()
    {
        $service = new DemoService();
        $result = (yield $service->returnEmptyArray());
        
        $this->assertEquals([], $result, 'DemoServer::returnEmptyArray failed');
    }

    public function taskReturnNullResultWork()
    {
        $service = new DemoService();
        $result = (yield $service->returnNullResult());

        $this->assertNull($result, 'DemoServer::returnNullResult failed');
    }
}