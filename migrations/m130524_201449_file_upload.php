<?php

use yii\db\Migration;

class m130524_201449_file_upload extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%file_upload}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(80)->notNull(),
            'path' => $this->string()->notNull(),
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%file_upload}}');
    }
}
