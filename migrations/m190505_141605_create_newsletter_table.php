<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%newsletter}}`.
 */
class m190505_141605_create_newsletter_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%newsletter}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%newsletter}}');
    }
}
