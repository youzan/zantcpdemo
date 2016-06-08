<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/3/29
 * Time: 下午8:38
 */
return [
    'table'=>'market_goods',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_goods #INSERT#',
    ],
    'batch_insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_goods #INSERTS#',
    ],
    'update'=>[
        'require' => ['market_id','goods_id'],
        'limit'   => [],
        'sql'     => 'UPDATE market_goods SET #DATA# WHERE market_id = #{market_id} AND goods_id = #{goods_id} LIMIT 1'
    ],
    'update_batch'=>[
        'require' => ['market_id','goods_id'],
        'limit'   => [],
        'sql'     => 'UPDATE market_goods SET #DATA# WHERE market_id = #{market_id} AND goods_id IN #{goods_id} #LIMIT#'
    ],
    'delete'=>[
        'require' => ['market_id','kdt_id','goods_id'],
        'limit'   => [],
        'sql'     => 'DELETE FROM market_goods WHERE market_id = #{market_id} AND kdt_id = #{kdt_id} AND goods_id = #{goods_id} LIMIT 1',
    ],
    'row_by_market_id_goods_id'=>[
        'require' => ['market_id','goods_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_goods WHERE market_id = #{market_id} AND goods_id = #{goods_id} LIMIT 1',
    ],
    'select_by_market_id_goods_ids'=>[
        'require' => ['market_id','goods_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_goods WHERE market_id = #{market_id} AND goods_id IN #{goods_id} #LIMIT#',
    ],
    'count_by_market_id_audit_status'=>[
        'require' => ['market_id','audit_status'],
        'limit'   => [],
        'sql'     => 'SELECT #COUNT# FROM market_goods WHERE market_id = #{market_id} AND audit_status = #{audit_status}',
    ],
    'select_by_market_id_audit_status'=>[
        'require' => ['market_id','audit_status'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_goods WHERE market_id = #{market_id} AND audit_status = #{audit_status} ORDER BY audit_time DESC #LIMIT#',
    ],

];