<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/21
 * Time: 11:29
 */

namespace Com\Youzan\Tcpdemo\Tests\Service;


use Com\Youzan\NovaTcpDemo\Service\DemoService;
use Zan\Framework\Testing\TaskTest;

class DemoServiceTest extends TaskTest {
    public function taskEchoBackWork()
    {
        $service = new DemoService();
        $result = $service->echoBack('hello');

        $this->assertEquals('hello', $result, 'DemoService.echoBack rpc call failed');
    }
}