<?php

namespace app\controllers;

use yii;
use app\models\Job;
use app\models\Employee;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\AccessRule2;
class EmployeeController extends \yii\web\Controller
{  
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                'class' => AccessRule2::className(),
                ],
                'only' => ['create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => [User::ROLE_ADMIN]
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                'delete' => ['POST'],
                ],
            ],


        ];
    }
    public function actionCreate()
    {
        $model = new Employee();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'employee_id' => $model->employee_id]);
        }
        return $this->render('create',compact('model'));
    }

    public function actionDelete($employee_id)
    {
        Employee::findOne($employee_id)->delete();
        return $this->redirect(['/employee/index']);
    }

    public function actionIndex()
    {
        $model = Employee::find()->orderBy('employee_id')->all();;

        return $this->render('index', compact('model'));
    }

    public function actionUpdate($employee_id)
    {
        $model = Employee::findOne($employee_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'employee_id' => $model->employee_id]);

    }
    return $this->render('update', compact('model'));
    }
    public function actionView($employee_id)
    {
        $model = Employee::findOne($employee_id);
        return $this->render('view', compact('model'));
    }

}
