<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/3/22
 * Time: 下午8:07
 */

return [
    'table'=>'market_shop_ban',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_shop_ban #INSERT#',
    ],
    'update'=>[
        'require' => ['id'],
        'limit'   => [],
        'sql'     => 'UPDATE market_shop_ban SET #DATA# WHERE id = #{id} LIMIT 1'
    ],
    'delete'=>[
        'require' => ['market_id','kdt_id'],
        'limit'   => [],
        'sql'     => 'DELETE FROM market_shop_ban WHERE market_id = #{market_id} AND kdt_id = #{kdt_id} LIMIT 1'
    ],
    'row_by_market_id_kdt_id' => [
        'require' => ['market_id','kdt_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_shop_ban WHERE market_id = #{market_id} AND kdt_id = #{kdt_id} LIMIT 1'
    ],
    'select_by_market_id' => [
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_shop_ban WHERE market_id = #{market_id} #LIMIT#'
    ],
];