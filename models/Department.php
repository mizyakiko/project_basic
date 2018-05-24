<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $department_id
 * @property string $department_name
 * @property int $location_id
 *
 * @property Employee[] $employees
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_name', 'location_id'], 'required'],
            [['location_id'], 'integer'],
            [['department_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'Department ID',
            'department_name' => 'Department Name',
            'location_id' => 'Location ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['department_id' => 'department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJob()
    {
        return $this->hasOne(Job::className(), ['job_id' => 'job_id']);
    }
}
