<?php

use yii\helpers\Html;

$this->title = "Update Department: $model->location_id";
$this->params['breadcrumbs'][] = ['label' => 'Department', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->location_id, 'url' => ['view', 'department_id' => $model->department_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
