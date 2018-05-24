<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="author-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'job_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'min_salary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'max_salary')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save',['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
