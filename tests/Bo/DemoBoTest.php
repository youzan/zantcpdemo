<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/5/10
 * Time: 17:13
 */

namespace Com\Youzan\TcpDemo\Tests\Bo;


use Com\Youzan\TcpDemo\Bo\DemoBo;
use Com\Youzan\TcpDemo\Tests\Dao\DemoDaoStub;
use Zan\Framework\Foundation\Container\Di;
use Zan\Framework\Testing\TaskTest;

class DemoBoTest extends TaskTest
{
    public function taskGetByIdWork()
    {
        $stub = new DemoDaoStub();
        Di::addStub($stub);

        $demoBo = new DemoBo();
        $demo = (yield $demoBo->getById(1));

        $this->assertArrayHasKey('id', 'DemoDaoStub faild');
        $this->assertArrayHasKey('name', 'DemoDaoStub faild');
        
        $this->assertEquals('demoStub', $demo['name'], 'DemoDaoStub faild');
        $this->assertEquals(1, $demo['id'], 'DemoDaoStub faild');
    }
}