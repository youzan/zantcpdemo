<?php
/**
 * Created by PhpStorm.
 * User: suqian
 * Date: 16/3/28
 * Time: 下午3:32
 */

return [
    'table'=>'market_range',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_range #INSERT#',
    ],
    'select_by_market_id'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_range WHERE market_id = #{market_id} ',
    ],
    'select_by_market_ids'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_range WHERE market_id IN #{market_ids} ',
    ],
    'row_by_area'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_range WHERE market_id = #{market_id} and province=#{province} and city=#{city} ',
    ],
];