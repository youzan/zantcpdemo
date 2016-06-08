<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/3/28
 * Time: 上午11:39
 */
return [
    'table'=>'tag',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO tag #INSERT#',
    ],
    'row_by_name'=>[
        'require' => ['name','crc32'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM tag WHERE crc32 = #{crc32} AND tag_name = #{tag_name} LIMIT 1',
    ],
    'select_by_crc32_list' =>[
        'require' => ['crc32'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM tag WHERE crc32 IN #{crc32}',
    ],
    'row_by_id'=>[
        'require' => ['id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM tag WHERE tag_id = #{id} LIMIT 1',
    ],
    'select_by_id_list' =>[
        'require' => ['id'],
        'limit'   => [],
        'sql'     => 'SELECT * FROM tag WHERE tag_id IN #{id} #LIMIT#',
    ]
];