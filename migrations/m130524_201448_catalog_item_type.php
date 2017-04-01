<?php

use yii\db\Migration;

class m130524_201448_catalog_item_type extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%catalog_item}}', 'type', $this->string(60)->after('discount_price'));
    }

    public function safeDown()
    {
        $this->dropColumn('{{%catalog_item}}', 'type');
    }
}
