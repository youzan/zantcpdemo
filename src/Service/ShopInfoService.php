<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/21
 * Time: 11:26
 */

namespace Com\Youzan\TcpDemo\Service;

use Com\Youzan\Shop\Api\Info\Domain\Shop;

class ShopInfoService implements \Com\Youzan\Shop\Api\Info\Interfaces\ShopInfoService
{
    public function selectByNo($userNo)
    {
        $domain = new Shop();
        $domain->comment = "chiyou";
        yield $domain;
    }

    public function selectNotExist($shopId)
    {
        // TODO: Implement selectNotExist() method.
    }

    public function selectFuzzName($name)
    {
        // TODO: Implement selectFuzzName() method.
    }

}