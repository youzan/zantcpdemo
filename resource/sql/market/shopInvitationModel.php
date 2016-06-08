<?php
/**
 * Created by PhpStorm.
 * User: liuxinlong
 * Date: 16/4/1
 * Time: 16:51
 */

return [
    'table'=>'shop_invitation_model',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO shop_invitation_model #INSERT#',
    ],
    'updateById'=>[
        'require' => ['id'],
        'limit'   => [],
        'sql'     => 'UPDATE shop_invitation_model SET #DATA# WHERE id = #{id} LIMIT 1'
    ],
    'getById' => [
        'require' => ['id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM shop_invitation_model WHERE id = #{id} LIMIT 1'
    ],
    'selectByMarketId' => [
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM shop_invitation_model WHERE market_id = #{market_id} order by updated_time desc #LIMIT#'
    ],
    'selectByIds'=>[
        'require' => ['id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM shop_invitation_model WHERE id IN #{ids} #LIMIT#',
    ],
    'countList' => [
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT count(*) as num FROM shop_invitation_model WHERE market_id = #{market_id}'
    ],
];