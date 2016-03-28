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

class DemoService implements DemoInterface{
    public function echoBack($name)
    {
        yield $name;
    }

    public function hello($name)
    {
        $demo = new Demo();
        $demo->id = 10;
        $demo->name = $name;

        return $demo;
    }
}