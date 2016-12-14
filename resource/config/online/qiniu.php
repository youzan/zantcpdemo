<?php

return [
    'access_key' => '3RGrMQh5KUseNAC7JzUkADp28fm07nN5Ymz7_19Z',
    'secret_key' => 'Ou2AnQMcGuSFCB_e8rcbd3H3khOI1e9_KmqH8Ecz',
    'bucket' => [
        'yz-scrm' => [
            'name' => 'yz-scrm',
            'domain' => 'scrm.yzcdn.cn',
            'https' => FALSE,
            'public' => FALSE,
            'save_key' => 'upload/$(year)/$(mon)/$(x:kdt_id)_$(etag)$(ext)',
            'expires' => 10 * 60,
            'callback_url' => 'https://koudaitong.com/scrm/customer/import/uploadCallback.json',
        ],
    ],
    'scope' => [
        'public' => '',
        'private' => 'yz-scrm',
    ]
];