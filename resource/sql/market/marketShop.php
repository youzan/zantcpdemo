<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/3/22
 * Time: 下午8:07
 */

return [
    'table'=>'market_shop',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_shop #INSERT#',
    ],
    'update'=>[
        'require' => ['market_id','kdt_id'],
        'limit'   => [],
        'sql'     => 'UPDATE market_shop SET #DATA# WHERE market_id = #{market_id} AND kdt_id = #{kdt_id} LIMIT 1'
    ],
    'row_by_market_id_kdt_id'=>[
        'require' => ['market_id','kdt_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_shop WHERE market_id = #{market_id} AND kdt_id = #{kdt_id} #LIMIT#',
    ],
    'select_by_market_id_kdt_ids'=>[
        'require' => ['market_id','kdt_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_shop WHERE market_id = #{market_id} AND kdt_id IN #{kdt_id} #LIMIT#',
    ],
    'select_by_kdt_ids'=>[
        'require' => ['kdt_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_shop WHERE kdt_id IN #{kdt_id} #LIMIT#',
    ],
];