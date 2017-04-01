<?php

use yii\db\Migration;

class m130524_201443_add_user extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%user}}', [
            'id' => 1,
            'username' => 'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('123qwe'),
            'password_reset_token' => Yii::$app->security->generateRandomString(),
            'email' => 'admin@example.com',
            'status' => 10,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    public function safeDown()
    {
        $this->delete('{{%user}}', ['id' => 1]);
    }
}
