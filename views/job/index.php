<?php 

use yii\helpers\Html;


$this->title = "Job";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a post.</span>
<?php else: ?>
        <?= Html::a('Create Job', ['create'], ['class' => 'btn btn-success']) ?>
<?php endif; ?> 
<table class="table table-bordered">
    <tr>
    
        <th>Job_title</th>
        <th>Min_salary</th>
        <th>Max_salary</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->job_title, ['/job/view', 'job_id'=>$model->job_id]); ?>
            <td><?= $model->min_salary ?></td>
            <td><?= $model->max_salary ?></td>
        </td> 
    </tr>
    <?php endforeach; ?>
</table>
