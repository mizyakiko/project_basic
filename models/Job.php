<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "job".
 *
 * @property int $job_id
 * @property string $job_title
 * @property string $min_salary
 * @property string $max_salary
 *
 * @property Employee[] $employees
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_title', 'min_salary', 'max_salary'], 'required'],
            [['min_salary', 'max_salary'], 'number'],
            [['job_title'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'job_id' => 'Job ID',
            'job_title' => 'Job Title',
            'min_salary' => 'Min Salary',
            'max_salary' => 'Max Salary',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['job_id' => 'job_id']);
    }
}
