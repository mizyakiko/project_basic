<?php

use yii\helpers\Html;

$this->title = "Update Job: $model->job_id";
$this->params['breadcrumbs'][] = ['label' => 'job', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->job_id, 'url' => ['view', 'job_id' => $model->job_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="Job-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
