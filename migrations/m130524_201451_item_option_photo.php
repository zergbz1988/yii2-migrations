<?php

use yii\db\Migration;

class m130524_201451_item_option_photo extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%item_option}}', 'photo', $this->string (255)->after ('price'));
    }

    public function safeDown()
    {
        $this->dropColumn('{{%item_option}}', 'photo');
    }
}
