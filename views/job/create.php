<?php

use yii\helpers\Html;


$this->title = 'Create Job';
$this->params['breadcrumbs'][] = ['label' => 'job', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
