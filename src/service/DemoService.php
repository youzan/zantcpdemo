<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/21
 * Time: 11:26
 */

namespace Com\Youzan\TcpDemo\Service;

use Com\Youzan\NovaTcpDemo\Interfaces\DemoService as DemoInterface;
use Com\Youzan\NovaTcpDemo\Entity\Demo;
use Com\Youzan\NovaTcpDemo\Service\NovaTcpDemoException;

class DemoService implements DemoInterface{
    public function echoBack($name)
    {
        usleep(50000);
        yield $name;
    }

    public function hello($name)
    {
        $demo = new Demo();
        $demo->id = 10;
        $demo->name = $name;

        yield $demo;
    }

    public function returnEmptyArray()
    {
        yield [];
    }

    public function returnNullResult()
    {
        yield null;
    }

    public function testException()
    {
        throw new NovaTcpDemoException('Nova Tcp Demo Exception');
        yield 'abc';
    }
}