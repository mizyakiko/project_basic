<?php

use yii\db\Migration;

/**
 * Handles the creation of table `job`.
 */
class m180523_045186_create_job_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('job', [
            'job_id' => $this->primaryKey(),
            'job_title' => $this->string(200)->notNull(),
            'min_salary' => $this->money()->notNull(),
            'max_salary' => $this->money()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('job');
    }
}
