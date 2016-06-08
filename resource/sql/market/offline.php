<?php
/**
 * Created by PhpStorm.
 * User: suqian
 * Date: 16/3/28
 * Time: 下午5:15
 */

return [
    'table'=>'market_offline',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_offline #INSERT#',
    ],
    'select_by_market_id'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_offline WHERE market_id = #{market_id} ',
    ],
    'select_by_market_ids'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_offline WHERE market_id IN #{market_ids} ',
    ],

];