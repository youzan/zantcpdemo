<?php
namespace Com\Youzan\TcpDemo\Core\Customer\Service;

class CustomerService implements \Com\Youzan\Scrm\Core\Customer\Interfaces\CustomerService
{

    /**
     * @return string
     */
    public function getCustomer()
    {
        return "hello customer";
    }
}