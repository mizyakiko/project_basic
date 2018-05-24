<?php

use yii\db\Migration;

/**
 * Handles the creation of table `department`.
 */
class m180523_051407_create_department_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('department', [
         'department_id' => $this->primaryKey(),
         'department_name' => $this->string(200)->notNull(),
         'location_id' =>$this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('department');
    }
}
