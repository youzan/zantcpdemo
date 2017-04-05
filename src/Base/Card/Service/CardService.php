<?php
namespace Com\Youzan\TcpDemo\Base\Card\Service;

class CardService implements \Com\Youzan\Scrm\Base\Card\Interfaces\CardService
{

    /**
     * @return string
     */
    public function getCard()
    {
        $str = str_repeat('a', rand(0, 65536));
        $checksum = md5($str);
        $length = strlen($str);
        yield $str.":".$length.":".$checksum;
    }
}