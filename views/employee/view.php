<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Employee: $model->employee_id";
$this->params['breadcrumbs'][] = ['label'=>'employee', 'url'=>['/employee/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'employee_id' => $model->employee_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'employee_id' => $model->employee_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this employee?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([ 
    'model' => $model,
    'attributes' => [
       'employee_id',
       'first_name',
       'last_name',
       'email',
       'phone_number',
       'hire_date',
       'job_id',
       'salary',
       'manager_id',
       'department_id'
    ]
]);