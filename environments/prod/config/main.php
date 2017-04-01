<?php
return [
    'id' => 'app-name',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=databasename',
            'username' => 'username',
            'password' => 'password',
            'charset' => 'utf8',
        ],
    ],
];
