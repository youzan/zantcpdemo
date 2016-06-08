<?php
/**
 * Created by PhpStorm.
 * User: suqian
 * Date: 16/3/30
 * Time: 下午3:12
 */


return [
    'table'=>'market_edit_log',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_edit_log #INSERT#',
    ],

    'row_by_market_id'=>[
        'require' => ['market_id','edit_type'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_edit_log WHERE market_id = #{market_id} and edit_type=#{edit_type}',
    ],

    'count_by_market_id'=>[
        'require' => ['market_id','edit_type'],
        'limit'   => [],
        'sql'     => 'SELECT #COUNT# FROM market_edit_log WHERE market_id = #{market_id} and edit_type=#{edit_type}',
    ],


];