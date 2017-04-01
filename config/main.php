<?php
return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'controllers',
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
