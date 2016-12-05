<?php
/**
 * Created by PhpStorm.
 * User: chuxiaofeng
 * Date: 16/11/22
 * Time: 下午2:31
 */

namespace Com\Youzan\TcpDemo\ThriftTest\Service;

class ArgTestService implements \Com\Youzan\Nova\ThriftTest\Interfaces\ArgTestService
{
    /**
     * @param int $arg1
     * @param int $arg2
     * @param int $arg3
     * @return string
     */
    public function func($arg1, $arg2, $arg3 = -1)
    {
        yield json_encode(get_defined_vars());
    }

    /**
     * @param int $arg1
     * @param \Com\Youzan\Nova\ThriftTest\Service\ObjArg $objArg
     * @return string
     */
    public function func1($arg1, \Com\Youzan\Nova\ThriftTest\Service\ObjArg $objArg = null)
    {
        yield json_encode(get_defined_vars());
    }
}