<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hire_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_id')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'salary')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'manager_id')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'department_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
