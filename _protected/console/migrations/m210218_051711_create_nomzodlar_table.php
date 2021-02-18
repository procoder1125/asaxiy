<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nomzodlar}}`.
 */
class m210218_051711_create_nomzodlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nomzodlar}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'lastname' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'countryOfOrigin' => $this->string(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'age' => $this->integer(),
            'hired' => $this->boolean(),
            'status' => $this->smallInteger()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%nomzodlar}}');
    }
}
