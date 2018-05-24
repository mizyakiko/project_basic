<?php 

use yii\helpers\Html;


$this->title = "Department";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Department', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>Department_Name</th>
        <th>Location_id</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->department_name, ['/department/view', 'department_id'=>$model->department_id]); ?>
        </td>  
        <td><?= $model->location_id?></td>
    </tr>
    <?php endforeach; ?>
</table>
