<?php

return [
    'Origin' => ['*'],
    'Access-Control-Request-Method' => ['GET', 'POST', 'HEAD', 'OPTIONS', 'DELETE', 'PATCH', 'PUT'],
    'Access-Control-Allow-Credentials' => false,
    'Access-Control-Expose-Headers' => [
        'X-Pagination-Total-Count',
        'X-Pagination-Page-Count',
        'X-Pagination-Current-Page',
        'X-Pagination-Per-Page',
        'Link',
    ],
    'Access-Control-Allow-Headers' => [
        'Origin',
        'Content-Type',
        'X-Auth-Token',
        'Authorization',
    ],
];