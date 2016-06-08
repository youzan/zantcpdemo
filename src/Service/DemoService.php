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
use Com\Youzan\Shop\Api\Info\Service\ShopInfoService;
use Zan\Framework\Store\Facade\Db;
use Zan\Framework\Store\Facade\KV;

class DemoService implements DemoInterface{
    public function echoBack($name)
    {
        //$res = (yield KV::set('test.test.test', 'test_string', 'ssdfsd'));
        //throw new NovaTcpDemoException('Nova Tcp Demo Exception', 11111);
//        $service = new ShopInfoService();
//        yield $service->selectByNo(20160101);
        //yield taskSleep(20);
        $res = (yield Db::execute('market.category.row_by_id', ['var'=>['relation_id'=>5]]));
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
        throw new NovaTcpDemoException('Nova Tcp Demo Exception', 11111);
        yield 'abc';
    }
}