<?php
/**
 * Created by PhpStorm.
 * User: suqian
 * Date: 16/3/30
 * Time: 下午4:36
 */

return [
    'table'=>'market_category_tag',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_category_tag #INSERT#',
    ],

    'batch_insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market_category_tag #INSERTS#',
    ],

    'row_by_name'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE  market_id=#{market_id} AND tag_name= #{tag_name}',
    ],

    'row_by_id'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE  relation_id= #{relation_id}',
    ],

    'select_by_categoryid'=>[
        'require' => ['market_id','parent_id','category_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE  market_id= #{market_id} and parent_id=#{parent_id} and category_id=#{category_id}',
    ],

    'select_by_tagids'=>[
        'require' => ['market_id','category_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE  market_id= #{market_id}  and category_id=#{category_id} and tag_id in #{tagids}',
    ],

    'row_by_tag_id'=>[
        'require' => ['market_id','parent_id','category_id','tag_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE  market_id= #{market_id}  and parent_id=#{parent_id}  and category_id=#{category_id} and tag_id=#{tag_id}',
    ],
    'select_by_categoryid_display'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE  market_id= #{market_id} and parent_id=#{parent_id} and category_id=#{category_id} and is_display=#{is_display}',
    ],

    'select_by_marketid'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE  market_id= #{market_id}',
    ],

    'select_by_parentid'=>[
        'require' => ['market_id','parentid'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE  market_id= #{market_id} and parent_id=#{parent_id}',
    ],

    'update_by_id'=>[
        'require' => ['relation_id'],
        'limit'   => [],
        'sql'     => ' UPDATE market_category_tag SET #DATA# WHERE relation_id = #{relation_id} ',
    ],
    'delete_by_ids'=>[
        'require' => ['relation_id'],
        'limit'   => [],
        'sql'     => 'DELETE FROM market_category_tag WHERE  relation_id IN #{relationIds}',
    ],
    'delete_by_market_id'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'DELETE FROM market_category_tag WHERE market_id= #{market_id}',
    ],
    'count_by_marketid'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT #COUNT# FROM market_category_tag WHERE  market_id= #{market_id} and is_display=#{is_display}',
    ],
    'count_by_categoryid'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT #COUNT# FROM market_category_tag WHERE  market_id=#{market_id} and parent_id=#{parent_id} and category_id=#{category_id} and is_display=#{is_display}',
    ],


    'select_by_marketid_isdisplay'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE market_id=#{market_id} and is_display=#{is_display}',
    ],

    'select_by_parentid_isdisplay'=>[
        'require' => ['market_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE market_id=#{market_id} and parent_id=#{parent_id} and is_display=#{is_display}',
    ],

    'select_by_ids'=>[
        'require' => ['relation_id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM market_category_tag WHERE  relation_id IN #{relation_id} #LIMIT#',
    ],

];