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
use Zan\Framework\Store\Facade\KV;
use Zan\Framework\Testing\TaskTest;

class DemoServiceTest extends TaskTest {
    public function initTask()
    {
        ConnectionInitiator::getInstance()->init('connection', null);
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

    public function taskTestException()
    {
        $exceptionMsg = '';

        try {
            $service = new DemoService();
            $result = (yield $service->testException());
        } catch (\Exception $e) {
            $exceptionMsg = $e->getMessage();
        }
        $this->assertEquals('Nova Tcp Demo Exception', $exceptionMsg, 'DemoServer::taskTestException failed');
    }

    public function taskTestKV()
    {
        $res = (yield KV::set('test.test.test', 'test_string', 'ssdfsd'));
        $this->assertTrue($res, 'KV set failed');
        $res = (yield KV::get('test.test.test', 'test_string'));
        $this->assertEquals('ssdfsd', $res, 'KV get1 failed');
        $res = (yield KV::remove('test.test.test', 'test_string'));
        $this->assertTrue($res, 'KV remove failed');
        $res = (yield KV::get('test.test.test', 'test_string'));
        $this->assertNull($res, 'KV get2 failed');
        $list = ["sdf", 1, ['sdf', 'fds']];
        $res = (yield KV::setList('test.test.test', 'test_string', $list));
        var_dump('setList:', $res);
        $res = (yield KV::get('test.test.test', 'test_string'));
        var_dump('getList:', $res);
    }
}