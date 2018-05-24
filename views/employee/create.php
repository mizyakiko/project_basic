<?php

use yii\helpers\Html;


$this->title = 'Create Employee';
$this->params['breadcrumbs'][] = ['label' => 'employee', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
