<?php

namespace app\controllers;
use yii;
use app\models\Job;
use app\models\Department;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\AccessRule2;

class DepartmentController extends \yii\web\Controller
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
        $model =new Department(); 

        if ($model->load(yii::$app->request->
        post()) && $model->save()) {
           
            return $this->redirect(['view', 'department_id'=>$model->department_id]);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($department_id)
    {
        
     Department::findOne($department_id)->delete($department_id);
        return $this->redirect(['/department/index']);
    }

    public function actionIndex()
    {
        $model =department::find()->orderBy('department_id')->all();;
        
        return $this->render('index',compact('model'));
    }

    public function actionUpdate($department_id)
    {
        $model = Department::findOne($department_id);

        if ($model->load(yii::$app->request->post()) && $model->save()){
         return $this->redirect(['view','department_id' => $model->department_id]);
        }
        return $this->render('update',compact('model'));
    }

    public function actionView($department_id)
    {
        $model =Department::findOne($department_id);
        return $this->render('view',compact('model'));
    }
    }


