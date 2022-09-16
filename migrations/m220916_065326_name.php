<?php

use yii\db\cubrid\Schema;
use yii\db\Migration;

/**
 * Class m220916_065326_name
 */
class m220916_065326_name extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('value', [
            'name' => Schema::TYPE_STRING,
            'id' => Schema::TYPE_INTEGER,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220916_065326_name cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220916_065326_name cannot be reverted.\n";

        return false;
    }
    */
}
