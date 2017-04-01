<?php
namespace Com\Youzan\TcpDemo\Base\Card\Service;

class CardService implements \Com\Youzan\Scrm\Base\Card\Interfaces\CardService
{

    /**
     * @return string
     */
    public function getCard()
    {
        $args = func_get_args();
        $str = str_repeat('a', rand(0, 65536));
        yield $str;
    }
}