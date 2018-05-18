<?php

use yii\db\Migration;

/**
 * Class m180518_161743_create_books
 */
class m180518_161743_create_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180518_161743_create_books cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180518_161743_create_books cannot be reverted.\n";

        return false;
    }
    */
}
