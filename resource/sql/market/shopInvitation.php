<?php
/**
 * Created by PhpStorm.
 * User: liuxinlong
 * Date: 16/4/1
 * Time: 16:51
 */

return [
    'table'=>'shop_invitation_list',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO shop_invitation_list #INSERT#',
    ],
    'updateById'=>[
        'require' => ['id'],
        'limit'   => [],
        'sql'     => 'UPDATE shop_invitation_list SET #DATA# WHERE id = #{id} LIMIT 1'
    ],
    'updateStateById'=>[
        'require' => ['id'],
        'limit'   => [],
        'sql'     => 'UPDATE shop_invitation_list SET #DATA# WHERE id = #{id} LIMIT 1'
    ],
    'getById' => [
        'require' => ['id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM shop_invitation_list WHERE id = #{id} LIMIT 1'
    ],
    'selectByMarketId' => [
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM shop_invitation_list WHERE market_id = #{market_id} order by updated_time desc #LIMIT#'
    ],
    'countList' => [
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT count(1) as num FROM shop_invitation_list WHERE market_id = #{market_id} #LIMIT#'
    ],
    'updateNumById'=>[
        'require' => ['id'],
        'limit'   => [],
        'sql'     => 'UPDATE shop_invitation_list SET #DATA# WHERE id = #{id} LIMIT 1'
    ],
    'getByShopName' => [
        'require' => ['shop_name'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM shop_invitation_list WHERE shop_name = #{shop_name} LIMIT 1'
    ],
];