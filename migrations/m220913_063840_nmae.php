<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m220913_063840_nmae
 */
class m220913_063840_nmae extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'post_id' => Schema::TYPE_TEXT,
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220913_063840_nmae cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220913_063840_nmae cannot be reverted.\n";

        return false;
    }
    */
}
