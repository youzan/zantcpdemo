<?php
/**
 * Created by PhpStorm.
 * User: suqian
 * Date: 16/3/22
 * Time: 下午4:05
 */


return [
    'table'=>'market',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market #INSERT#',
    ],

    'update_by_id'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => ' UPDATE market SET #DATA# WHERE market_id = #{market_id} ',
    ],

    'row_by_id'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market WHERE market_id = #{market_id} ',
    ],

    'row_by_alias'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market WHERE market_alias = #{alias} ',
    ],

    'row_by_user_id'=>[
        'require' => ['user_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market WHERE user_id = #{user_id} ',
    ]

];