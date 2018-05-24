<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m180523_051535_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp() 
    {      
        $this->createTable('employee', [
            'employee-id' => $this->primaryKey(),
            'first_name' => $this->string(200)->notNull(),
            'last_name' => $this->string(200)->notNull(),
            'email' => $this->string(200)->notNull(),
            'phone_number' => $this->string(11),
            'hire_date' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'job_id' => $this->integer()->notNull(),
            'salary' => $this->money()->notNull(),
            'manager_id' => $this->integer()->notNull(),
            'department_id' => $this->integer()->notNull()
            
        ]);
            $this->createIndex('idx-employee-job_id','employee','job_id');
            $this->addForeignKey('fk-employee-job', 'employee','job_id','job','job_id');

            $this->createIndex('idx-employee-department_id','employee','department_id');
            $this->addForeignKey('fk-employee-department', 'employee','department_id','department','department_id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-job-employee','job');
        $this->dropIndex('idx-job-employee_id','job');
        $this->dropForeignKey('fk-employee-department','employee');
        $this->dropIndex('idx-employee-department_id','employee');
        $this->dropTable('employee');
    }
}

