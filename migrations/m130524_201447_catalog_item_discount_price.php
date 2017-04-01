<?php

use yii\db\Migration;

class m130524_201447_catalog_item_discount_price extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%catalog_item}}', 'discount_price', $this->integer()->unsigned()->after('hit'));
    }

    public function safeDown()
    {
        $this->dropColumn('{{%catalog_item}}', 'discount_price');
    }
}
