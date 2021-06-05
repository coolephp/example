<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

return [
    /*
     * 默认链接
     */
    'default' => cenv('DB_DEFAULT', 'mysql'),

    /*
     * 链接信息
     */
    'connections' => [
        'mysql' => [
            // 类型
            'type' => 'mysql',

            // 地址
            'hostname' => cenv('DB_HOSTNAME', '127.0.0.1'),

            // 端口
            'hostport' => cenv('DB_HOSTPORT', 3306),

            // 用户名
            'username' => cenv('DB_USERNAME', 'root'),

            // 密码
            'password' => cenv('DB_PASSWORD', ''),

            // 数据库
            'database' => cenv('DB_DATABASE', 'coole'),

            // 额外参数
            'params' => [],

            // 字符集
            'charset' => cenv('DB_CHARSET', 'utf8'),

            // 表前缀
            'prefix' => cenv('DB_PREFIX', ''),

            // Debug
            'debug' => cenv('DB_DEBUG', false),
        ],
    ],
];
