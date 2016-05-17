<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/5/10
 * Time: 17:12
 */

namespace Com\Youzan\TcpDemo\Tests\Dao;


use Com\Youzan\TcpDemo\Dao\DemoDao;
use Zan\Framework\Testing\Stub;

class DemoDaoStub extends Stub
{
    protected $realClassName = DemoDao::class;
    
    public function selectById($id)
    {
        yield [
            'id'    => $id,
            'name'  => 'demoStub',
        ];
    }
}