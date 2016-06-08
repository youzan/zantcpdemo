<?php
/**
 * Created by PhpStorm.
 * User: suqian
 * Date: 16/3/30
 * Time: 下午4:36
 */

return [
    'table'=>'category',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO category #INSERT#',
    ],

    'row_by_name'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'SELECT * FROM category WHERE  category_name= #{category_name}',
    ],

    'row_by_id'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'SELECT * FROM category WHERE  category_id= #{category_id}',
    ],

    'select_by_names'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'SELECT * FROM category WHERE  category_name in #{names}',
    ],

    'select_by_ids'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'SELECT * FROM category WHERE  category_id in #{ids}',
    ],

    'select_by_parentid'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'SELECT * FROM category WHERE  parent_id= #{parent_id}',
    ],


];