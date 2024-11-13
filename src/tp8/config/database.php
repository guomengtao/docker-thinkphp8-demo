<?php
return [
    // 默认使用的数据库连接配置
    'default'         => env('database.driver', 'mysql'),

    // 自定义时间查询规则
    'time_query_rule' => [],

    // 自动写入时间戳字段
    'auto_timestamp'  => true,

    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',

    // 数据库连接配置信息
    'connections'     => [
        'mysql' => [
            // 数据库类型
            'type'              => env('database.type', 'mysql'),
            // 服务器地址 - 使用服务名称
            'hostname'          => env('database.hostname', 'mysql'),
            // 数据库名
            'database'          => env('database.database', 'tp8'),
            // 用户名
            'username'          => env('database.username', 'root'),
            // 密码
            'password'          => env('database.password', 'root'),
            // 端口
            'hostport'          => env('database.hostport', '3306'),
            // 数据库编码默认采用utf8mb4
            'charset'           => env('database.charset', 'utf8mb4'),
            // 数据库表前缀
            'prefix'            => env('database.prefix', ''),
        ],
    ],
];
