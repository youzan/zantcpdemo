<?php
/**
 * Created by PhpStorm.
 * User: marsnowxiao
 * Date: 2017/4/18
 * Time: 下午4:31
 */

use Zan\Framework\Contract\Foundation\ExceptionHandler;

class GenericExceptionHandler implements ExceptionHandler
{
    public function handle(\Exception $e)
    {
        sys_error("GenericExceptionHandler handle: ".$e->getMessage());
        yield new \Exception("网络错误", 0);
    }
}

//return [
//    'match' => [
//        [
//            ".*", "all"
//        ]
//    ],
//    'group' => [
//        "genericExceptionHandlerGroup" => [
//            GenericExceptionHandler::class
//        ],
//        "all" => [
//            GenericExceptionHandler::class
//        ],
//    ],
//];