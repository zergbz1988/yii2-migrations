<?php

use yii\db\Migration;

class m130524_201450_item_option extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%item_option}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(120)->notNull(),
            'item_id' => $this->integer()->notNull(),
            'discount_price' => $this->integer()->unsigned(),
            'price' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('IDX_io_item', '{{%item_option}}', ['item_id']);
        $this->addForeignKey('FK_io_item', '{{%item_option}}', 'item_id', '{{%catalog_item}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('{{%item_option}}');
    }
}
