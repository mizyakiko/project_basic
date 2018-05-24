<?php

namespace app\controllers;
use yii;
use app\models\Job;
use app\models\Vehicle;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\AccessRule2;


class JobController extends \yii\web\Controller
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
        $model = new Job();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'job_id' => $model->job_id]);
    }
    return $this->render('create', compact('model'));
}

    public function actionDelete($job_id)
    {
        Job::findOne($job_id)->delete();
        return $this->redirect(['/job/index']);
    }

    public function actionIndex()
    {
        $model = Job::find()->orderBy('job_id')->all();;

        return $this->render('index', compact('model'));
    }

    public function actionUpdate($job_id)
    {
        $model = Job::findOne($job_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'job_id' => $model->job_id]);
    }
    return $this->render('update', compact('model'));
    }
    public function actionView($job_id)
    {
        $model = Job::findOne($job_id);
        return $this->render('view', compact('model'));
    }

}
