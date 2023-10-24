<?php

return [
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => ['v1/converter' => 'v1/converter'],
        'extraPatterns' => [
            'OPTIONS,GET <code:[a-zA-Z]+>/<amount:[0-9.]+>' => 'index',
        ],
    ],
];