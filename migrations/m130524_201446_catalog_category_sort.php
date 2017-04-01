<?php

use yii\db\Migration;

class m130524_201446_catalog_category_sort extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%catalog_category}}', 'sort', $this->smallInteger()->unsigned()->unique()->notNull()->after('title'));
    }

    public function safeDown()
    {
        $this->dropColumn('{{%catalog_category}}', 'sort');
    }
}
