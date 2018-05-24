<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Department: $model->department_id";
$this->params['breadcrumbs'][] = ['label'=>'department', 'url'=>['/department/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'department_id' => $model->department_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'department_id' => $model->department_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this department?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([ 
    'model' => $model,
    'attributes' => [
       'department_id',
       'department_name',
       'location_id'
    ]
]);