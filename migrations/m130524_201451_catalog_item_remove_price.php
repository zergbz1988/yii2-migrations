<?php

use yii\db\Migration;

class m130524_201451_catalog_item_remove_price extends Migration
{
    public function safeUp()
    {
        $this->dropColumn('{{%catalog_item}}', 'discount_price');
        $this->dropColumn('{{%catalog_item}}', 'price');
        $this->dropColumn('{{%catalog_item}}', 'release_form');
    }

    public function safeDown()
    {
        $this->addColumn('{{%catalog_item}}', 'release_form', $this->string(60)->after('concentrate'));
        $this->addColumn('{{%catalog_item}}', 'price', $this->integer()->unsigned()->after('release_form'));
        $this->addColumn('{{%catalog_item}}', 'discount_price', $this->integer()->unsigned()->after('hit'));
    }
}
