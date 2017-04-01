<?php

use yii\db\Migration;

class m130524_201445_catalog_item_echo_hit extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%catalog_item}}', 'eco', $this->boolean()->notNull()->defaultValue(0)->after('price'));
        $this->addColumn('{{%catalog_item}}', 'hit', $this->boolean()->notNull()->defaultValue(0)->after('eco'));
    }

    public function safeDown()
    {
        $this->dropColumn('{{%catalog_item}}', 'eco');
        $this->dropColumn('{{%catalog_item}}', 'hit');
    }
}
