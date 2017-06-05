<?php

namespace Com\Youzan\TcpDemo\Service;

use Com\Youzan\Demo\Service\BaseStruct;
use Com\Youzan\Demo\Service\DemoServiceException;
use Com\Youzan\Demo\Service\ErrorLevel;
use Com\Youzan\Demo\Interfaces\DemoService as BaseService;
use Com\Youzan\Demo\Service\MixedStruct;

class DemoService implements BaseService
{
    /**
     * @return string
     */
    public function getCard()
    {
        $str = str_repeat('a', rand(0, 65536));
        $checksum = md5($str);
        $length = strlen($str);
        yield $str . ":" . $length . ":" . $checksum;
    }

    /**
     * @throws \Com\Youzan\Demo\Service\DemoServiceException
     */
    public function throwException()
    {
        throw new DemoServiceException("This is a demo exception");
    }

    /**
     */
    public function returnVoid()
    {
        // Do nothing
    }

    /**
     * @return bool
     */
    public function returnBool()
    {
        yield true;
    }

    /**
     * @return int
     */
    public function returnI32()
    {
        yield rand() % 1024;
    }

    /**
     * @return double
     */
    public function returnDouble()
    {
        yield rand(1, 100) / (double)100;
    }

    /**
     * @return string
     */
    public function returnString()
    {
        yield str_repeat('a', rand(1, 20));
    }

    /**
     * @return int
     */
    public function returnEnum()
    {
        yield ErrorLevel::INFO;
    }

    /**
     * @return \Com\Youzan\Demo\Service\BaseStruct
     */
    private function makeBaseStruct()
    {
        $base = new BaseStruct();
        $base->propBool = true;
        $base->propByte = 'a';
        $base->propI16 = 10;
        $base->propI32 = 100;
        $base->propI64 = 1000;
        $base->propDouble = 1000.0;
        $base->propString = "BaseStruct";
        return $base;
    }

    /**
     * @return \Com\Youzan\Demo\Service\BaseStruct
     */
    public function returnBaseStruct()
    {
        yield $this->makeBaseStruct();
    }

    /**
     * @return \Com\Youzan\Demo\Service\MixedStruct
     */
    public function returnMixedStruct()
    {
        $base = $this->makeBaseStruct();
        $mixed = new MixedStruct();
        $mixed->baseStruct = $base;
        $mixed->propString = "MixedStruct";
        $mixed->propList = [$base];
        $mixed->propSet = [$base];
        $mixed->propMap = ["returnMixedStruct" => $base];

        yield $mixed;
    }

    /**
     * @return \Com\Youzan\Demo\Service\BaseStruct[]
     */
    public function returnList()
    {
        yield [$this->makeBaseStruct()];
    }

    /**
     * @return \Com\Youzan\Demo\Service\BaseStruct[]
     */
    public function returnSet()
    {
        yield [$this->makeBaseStruct()];
    }

    /**
     * @return array
     */
    public function returnMap()
    {
        yield ["returnMap" => $this->makeBaseStruct()];
    }

    /**
     * @param string $paraString
     * @param int $errorLevel
     */
    public function paraBaseNoReturn($paraString, $errorLevel)
    {
        var_dump(func_get_args());
    }

    /**
     * @param bool $paraBool
     * @param int $paraI32
     * @param double $paraDouble
     * @param string $paraString
     * @param \Com\Youzan\Demo\Service\BaseStruct $baseStruct
     * @param \Com\Youzan\Demo\Service\BaseStruct[] $returnList
     * @param \Com\Youzan\Demo\Service\BaseStruct[] $returnSet
     * @param array $returnMap
     * @param int $errorLevel
     */
    public function paraMixedNoReturn($paraBool, $paraI32, $paraDouble, $paraString, BaseStruct $baseStruct, array $returnList, array $returnSet, array $returnMap, $errorLevel)
    {
        var_dump(func_get_args());
    }

    /**
     * @param bool $paraBool
     * @param int $paraI32
     * @param double $paraDouble
     * @param string $paraString
     * @param \Com\Youzan\Demo\Service\BaseStruct $baseStruct
     * @param \Com\Youzan\Demo\Service\BaseStruct[] $returnList
     * @param \Com\Youzan\Demo\Service\BaseStruct[] $returnSet
     * @param array $returnMap
     * @param int $errorLevel
     * @return array
     */
    public function complexMethod($paraBool, $paraI32, $paraDouble, $paraString, BaseStruct $baseStruct, array $returnList, array $returnSet, array $returnMap, $errorLevel)
    {
        yield func_get_args();
    }
}