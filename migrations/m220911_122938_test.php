<?php

use yii\db\Migration;
use yii\helpers\ArrayHelper;
use yii\db\Schema; 

/**
 * Class m220911_122938_test
 */
class m220911_122938_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => Schema::TYPE_INTEGER,
            'username' => Schema::TYPE_STRING . '(255) NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220911_122938_test cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220911_122938_test cannot be reverted.\n";

        return false;
    }
    */
}
