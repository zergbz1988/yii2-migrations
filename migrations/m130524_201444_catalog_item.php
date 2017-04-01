<?php

use yii\db\Migration;

class m130524_201444_catalog_item extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%catalog_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(120)->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%catalog_item}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(120)->notNull()->unique(),
            'desc' => $this->text(),
            'image' => $this->string(60)->notNull(),
            'category_id' => $this->integer()->notNull(),
            'concentrate' => $this->string(60),
            'release_form' => $this->string(60),
            'price' => $this->integer()->unsigned()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('IDX_item_category', '{{%catalog_item}}', ['category_id']);
        $this->addForeignKey('FK_item_category', '{{%catalog_item}}', 'category_id', '{{%catalog_category}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('{{%catalog_item}}');
        $this->dropTable('{{%catalog_category}}');
    }
}
