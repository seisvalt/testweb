<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%programador}}`.
 */
class m210420_173605_create_programador_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%programador}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'dni' => $this->string(),
            'email' => $this->string(),
            'languages' => $this->text(),
            'createdAt' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updatedAt' => 'timestamp on update current_timestamp',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%programador}}');
    }
}
