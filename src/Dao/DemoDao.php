<?php
namespace Com\Youzan\TcpDemo\Dao;
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/5/8
 * Time: 14:02
 */
class DemoDao 
{
    public function selectById($id)
    {
        yield [
            'id'    => $id,
            'name'  => 'demo',
        ];
    }
}