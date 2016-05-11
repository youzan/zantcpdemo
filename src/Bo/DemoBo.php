<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/5/10
 * Time: 17:07
 */

namespace Com\Youzan\TcpDemo\Bo;


use Com\Youzan\TcpDemo\Dao\DemoDao;
use Zan\Framework\Foundation\Container\Di;

class DemoBo
{
    /**
     * @var DemoDao
     */
    private $dao;

    public function __construct()
    {
        $this->dao = Di::make(DemoDao::class); 
    }
}