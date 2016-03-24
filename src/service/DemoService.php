<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/21
 * Time: 11:26
 */

namespace Com\Youzan\TcpDemo\Service;

use Com\Youzan\NovaTcpDemo\Interfaces\DemoService as DemoInterface;

class DemoService implements DemoInterface{
    public function echoBack($name)
    {
        yield $name;
    }
}