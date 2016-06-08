<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/3/31
 * Time: 下午7:12
 */
return [
    'table'=>'market_goods_category_tag_relation',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_goods_category_tag_relation #INSERT#',
    ],
    'batch_insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_goods_category_tag_relation #INSERTS#',
    ],
    'delete'=>[
        'require' => ['market_id','goods_id','category_tag_id'],
        'limit'   => [],
        'sql'     => 'DELETE FROM market_goods_category_tag_relation WHERE market_id = #{market_id} AND goods_id = #{goods_id} AND category_tag_id = #{category_tag_id} LIMIT 1',
    ],
    'delete_batch'=>[
        'require' => ['market_id','goods_id','category_tag_id'],
        'limit'   => [],
        'sql'     => 'DELETE FROM market_goods_category_tag_relation WHERE market_id = #{market_id} AND goods_id = #{goods_id} AND category_tag_id IN #{category_tag_id} #LIMIT#',
    ],
    'select_by_goods_id'=>[
        'require' => ['market_id','goods_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_goods_category_tag_relation WHERE market_id = #{market_id} AND goods_id = #{goods_id} #LIMIT#',
    ],
    'select_by_goods_id_list'=>[
        'require' => ['market_id','goods_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_goods_category_tag_relation WHERE market_id = #{market_id} AND goods_id IN #{goods_id} #LIMIT#',
    ],
    'row_by_goods_id_category_tag_id' =>[
        'require' => ['goods_id','category_tag_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_goods_category_tag_relation WHERE goods_id = #{goods_id} AND category_tag_id = #{category_tag_id} LIMIT 1',
    ],
    'select_by_goods_id_category_tag_ids' =>[
        'require' => ['market_id','goods_id','category_tag_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_goods_category_tag_relation WHERE market_id = #{market_id} AND goods_id = #{goods_id} AND category_tag_id IN #{category_tag_id} #LIMIT#',
    ],
    'select_by_goods_ids_category_tag_ids' =>[
        'require' => ['goods_id','category_tag_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_goods_category_tag_relation WHERE goods_id IN #{goods_id} AND category_tag_id IN #{category_tag_id} #LIMIT#',
    ]
];