<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Memcached settings
| -------------------------------------------------------------------------
| Your Memcached servers can be specified below.
|
|	See: https://codeigniter.com/userguide3/libraries/caching.html#memcached
|
*/
$config = [
    'default' => [
        'hostname' => '127.0.0.1',
        'port' => '11211',
        'weight' => '1',
    ],
];
