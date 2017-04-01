<?php
return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=111',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
