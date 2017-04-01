<?php
/**
 * Created by PhpStorm.
 * User: chuxiaofeng
 * Date: 16/11/22
 * Time: 下午2:31
 */

namespace Com\Youzan\TcpDemo\Framework\Generic\Php\Service;


use Com\Youzan\Nova\Framework\Generic\Php\Service\BaseStruct;
use Com\Youzan\Nova\Framework\Generic\Php\Service\ErrorLevel;
use Com\Youzan\Nova\Framework\Generic\Php\Service\GenericTestServiceException;
use Com\Youzan\Nova\Framework\Generic\Php\Service\MixedStruct;

class GenericTestService implements \Com\Youzan\Nova\Framework\Generic\Php\Interfaces\GenericTestService
{

    /**
     * @throws \Com\Youzan\Nova\Framework\Generic\Php\Service\GenericTestServiceException
     */
    public function throwException()
    {
        $kdtId = (yield getContext("kdt_id"));
        $adminId = (yield getContext("admin_id"));

        $args = func_get_args();
        throw new GenericTestServiceException(__METHOD__, 42);
        yield;
    }

    /**
     */
    public function returnVoid()
    {
        $args = func_get_args();
        yield null;
    }

    /**
     * @return bool
     */
    public function returnBool()
    {
        $args = func_get_args();
        yield true;
    }

    /**
     * @return int
     */
    public function returnI32()
    {
        $args = func_get_args();
        yield 42;
    }

    /**
     * @return double
     */
    public function returnDouble()
    {
        $args = func_get_args();
        yield M_PI;
    }

    /**
     * @return string
     */
    public function returnString()
    {
        $args = func_get_args();
	$str = str_repeat('a', rand(0, 65536));
        yield $str;
    }

    /**
     * @return int
     */
    public function returnEnum()
    {
        $args = func_get_args();
        yield ErrorLevel::DEBUG;
    }

    /**
     * @return \Com\Youzan\Nova\Framework\Generic\Php\Service\BaseStruct
     */
    public function returnBaseStruct()
    {
//        $hello = (yield getRpcContext("hello"));
//        $ctx = (yield getRpcContext());

//        $hello1 = (yield getContext("hello"));
//        yield setRpcContext(__METHOD__, __CLASS__);

        $args = func_get_args();
        yield $this->makeBaseStruct();
//        yield new BaseStruct();
    }

    /**
     * @return \Com\Youzan\Nova\Framework\Generic\Php\Service\MixedStruct
     */
    public function returnMixedStruct()
    {
        $args = func_get_args();
        yield $this->makeMixedStruct();

//        $ms = new MixedStruct();
//        $ms->baseStruct = new BaseStruct();
//        $ms->propString = __METHOD__;
//        $ms->propList = $this->makeBaseStructList();
//        $ms->propMap = $this->makeBaseStructMap();
//        $ms->propSet = $this->makeBaseStructSet();
//
//        yield $ms;
    }

    /**
     * @return \Com\Youzan\Nova\Framework\Generic\Php\Service\BaseStruct[]
     */
    public function returnList()
    {
        $args = func_get_args();
        yield $this->makeBaseStructList();
    }

    /**
     * @return \Com\Youzan\Nova\Framework\Generic\Php\Service\BaseStruct[]
     */
    public function returnSet()
    {
        $args = func_get_args();
        yield $this->makeBaseStructSet();
    }

    /**
     * @return array
     */
    public function returnMap()
    {
        $args = func_get_args();
        yield $this->makeBaseStructMap();
    }

    /**
     * @param string $paraString
     * @param int $errorLevel
     * @return void
     */
    public function paraBaseNoReturn($paraString, $errorLevel)
    {
        // get_defined_vars();
        yield;
    }

    /**
     * @param bool $paraBool
     * @param int $paraI32
     * @param double $paraDouble
     * @param string $paraString
     * @param \Com\Youzan\Nova\Framework\Generic\Php\Service\BaseStruct $baseStruct
     * @param \Com\Youzan\Nova\Framework\Generic\Php\Service\BaseStruct[] $returnList
     * @param \Com\Youzan\Nova\Framework\Generic\Php\Service\BaseStruct[] $returnSet
     * @param array $returnMap
     * @param int $errorLevel
     * @return void
     */
    public function paraMixedNoReturn($paraBool, $paraI32, $paraDouble, $paraString, BaseStruct $baseStruct, array $returnList, array $returnSet, array $returnMap, $errorLevel)
    {
        // get_defined_vars();
        yield;
    }

    /**
     * @param bool $paraBool
     * @param int $paraI32
     * @param double $paraDouble
     * @param string $paraString
     * @param \Com\Youzan\Nova\Framework\Generic\Php\Service\BaseStruct $baseStruct
     * @param \Com\Youzan\Nova\Framework\Generic\Php\Service\BaseStruct[] $returnList
     * @param \Com\Youzan\Nova\Framework\Generic\Php\Service\BaseStruct[] $returnSet
     * @param array $returnMap
     * @param int $errorLevel
     * @return array
     */
    public function complexMethod($paraBool, $paraI32, $paraDouble, $paraString, BaseStruct $baseStruct, array $returnList,
                                  array $returnSet, array $returnMap = ["def"=>null], $errorLevel = -1)
    {
        $map = $this->makeBaseStructMap();
//        $ret["ret"] = get_defined_vars();



//        $ret = (yield setRpcContext("hello", "world"));
//        var_dump($ret);
//
//        $ret = (yield getRpcContext("hello_job_server"));
//        var_dump($ret);
//
//        $ret = (yield getRpcContext());
//        var_dump($ret);
//
//        $ret = (yield setRpcContext("hello", null));
//        var_dump($ret);
//
//        $ret = (yield getRpcContext("hello"));
//        var_dump($ret);
//
//        yield setRpcContext("method", __METHOD__);

        yield $map;
    }

    private function makeBaseStruct()
    {
        $bs = new BaseStruct();
        $bs->propBool = true;
        $bs->propByte = chr(ord('A')); // chr(rand(ord('A'), ord('z')));
        $bs->propI16 = 16;
        $bs->propI32 = 32;
        $bs->propI64 = PHP_INT_MAX;
        $bs->propDouble = M_PI;
        $bs->propString = __METHOD__;
        $bs->errorLevel = ErrorLevel::DEBUG;
        return $bs;
    }

    private function makeBaseStructList()
    {
        $list = [];
        for ($i = 0; $i < 10; $i++) {
            $list[] = $this->makeBaseStruct();
        }
        return $list;
    }

    private function makeBaseStructSet()
    {
        $list = [];
        for ($i = 0; $i < 10; $i++) {
            $list[] = $this->makeBaseStruct();
        }
        return $list;
    }

    private function makeBaseStructMap()
    {
        $list = [];
        for ($i = 0; $i < 10; $i++) {
            $list["key$i"] = $this->makeBaseStruct();
        }
        return $list;
    }

    private function makeMixedStruct()
    {
        $ms = new MixedStruct();
        $ms->baseStruct = $this->makeBaseStruct();
        $ms->propString = __METHOD__;
        $ms->propList = $this->makeBaseStructList();
        $ms->propMap = $this->makeBaseStructMap();
        $ms->propSet = $this->makeBaseStructSet();
        return $ms;
    }
}